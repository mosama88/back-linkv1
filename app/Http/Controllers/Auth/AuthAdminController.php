<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthAdminController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('dashboard.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function store(AdminLoginRequest $request): RedirectResponse
    {
        // جلب بيانات تسجيل الدخول
        $credentials = $request->only('email', 'password');

        // محاولة تسجيل الدخول باستخدام حارس الـ admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            // تخزين بيانات إضافية في السيشن
            session([
                'user_id' => Auth::guard('admin')->id(),
                'guard'   => 'admin'
            ]);

            return redirect()->route('dashboard.index');
        }

        // لو فشل تسجيل الدخول
        return back()->withErrors([
            'email' => 'بيانات الدخول غير صحيحة.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
