<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackLink;

class BacklinkController extends Controller
{
    public function index()
    {
        $data = BackLink::orderByDesc('id')->paginate();

        return view('website.backlinks',compact('data'));
    }

    // public function store(ContactRequest $request)
    // {
    //     $validated = $request->validated();

    //     Contact::create($validated);

    //     return redirect()->back()->with('success', 'لقد تم ارسال رسالتك بنجاح!');
    // }
}