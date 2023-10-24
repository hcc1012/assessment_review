<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url= '';
        if ($request->user()->roles->contains('id', 1)){
            $url='admin/dashboard';
        }elseif($request->user()->roles->contains('id', 2)){
            $url='user/dashboard1';
        }elseif($request->user()->roles->contains('id', 3)){
            $url='user/dashboard1';
        }elseif($request->user()->roles->contains('id', 4)){
            $url='user/dashboard1';
        }elseif($request->user()->roles->contains('id', 5)){
            $url='user/dashboard1';
        }

        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
