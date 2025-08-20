<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BackLink;
use App\Enums\ActiveEnum;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Dashboard\BackLinkRequest;
use Exception;


class BackLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BackLink::orderByDesc('id')->paginate();
        return view('dashboard.back-links.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.back-links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BackLinkRequest $request, BackLink $backLink)
    {
        try {
            $user = Auth::user()->id;

            $validated = $request->validated();
            $dataInsert = array_merge($validated, [
                'used_balance' => 0,
                'remain_balance' => $request->balance,
                'active' => ActiveEnum::ACTIVE,
                'created_by' => $user,
            ]);
            $backLink->create($dataInsert);
            return redirect()->route('dashboard.back-links.index')
                ->with('success', 'تم أضافة URL بنجاح');
        } catch (Exception $ex) {
            return redirect()->route('dashboard.back-links.index')->withErrors(['errors' => 'عفوآ حدث خطأ'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function edit(BackLink $backLink)
    {
        return view('dashboard.back-links.edit', compact('backLink'));
    }

    public function show(BackLink $backLink)
    {
        return view('dashboard.back-links.show', compact('backLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BackLink $backLink)
    {
        try {

            $backLink->delete();
            return response()->json([
                'success' => true,
                'message' => 'تم حذف URL بنجاح'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء محاولة الحذف',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
