<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class BacklinkController extends Controller
{
    public function index()
    {
        return view('website.backlinks');
    }

    // public function store(ContactRequest $request)
    // {
    //     $validated = $request->validated();

    //     Contact::create($validated);

    //     return redirect()->back()->with('success', 'لقد تم ارسال رسالتك بنجاح!');
    // }
}