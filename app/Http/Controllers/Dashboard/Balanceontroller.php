<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Balance;
use App\Enums\ActiveEnum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Dashboard\BalanceRequest;
use Exception;

class Balanceontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Balance::with('user')->orderByDesc('id')->paginate();
        return view('dashboard.balances.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.balances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BalanceRequest $request, Balance $balance)
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
            $balance->create($dataInsert);
            return redirect()->route('dashboard.balances.index')
                ->with('success', 'تم أضافة الرصيد بنجاح');
        } catch (Exception $ex) {
            return redirect()->route('dashboard.balances.index')->withErrors(['errors' => 'عفوآ حدث خطأ'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Balance $balance)
    {
        return view('dashboard.balances.show', compact('balance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Balance $balance)
    {
        return view('dashboard.balances.edit', compact('balance'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BalanceRequest $request, Balance $balance)
    {
        try {
            $user = Auth::user()->id;
            $validated = $request->validated();
            $dataUpdate = array_merge($validated, [
                'created_by' => $user,
            ]);
            $balance->update($dataUpdate);
            return redirect()->route('dashboard.balances.index')
                ->with('success', 'تم تعديل الرصيد بنجاح');
        } catch (Exception $ex) {
            return redirect()->route('dashboard.balances.index')->withErrors(['errors' => 'عفوآ حدث خطأ'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Balance $balance)
    {
        try {
            $balance->delete();
            return redirect()->route('dashboard.balances.index')
                ->with('success', 'تم حذف الرصيد بنجاح');
        } catch (Exception $ex) {
            return redirect()->route('dashboard.balances.index')->withErrors(['errors' => 'عفوآ حدث خطأ'])->withInput();
        }
    }




    public function search(Request $request)
    {
        $query = $request->input('q');

        $users = User::select('id', 'name', 'mobile')
            ->where('name', 'LIKE', "%$query%")
            ->orWhere('mobile', 'LIKE', "%$query%")
            ->limit(5)
            ->get();

        return response()->json([
            'results' => $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'text' => $user->name . ' - ' . $user->mobile
                ];
            })
        ]);
    }
}