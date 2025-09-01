<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Setting;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('website.contact', compact('setting'));
    }

    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        Contact::create($validated);

        return redirect()->back()->with('success', 'لقد تم ارسال رسالتك بنجاح!');
    }
}
