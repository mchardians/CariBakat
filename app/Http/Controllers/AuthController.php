<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('pages.auth.signin');
    }

    public function authenticate(SignInRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch(Auth::user()->role->name) {
                case "pelamar":
                    return redirect()->intended(route('pelamar.profile'))->with("success", "Periksa peluang karir untuk informasi lowongan pekerjaan.");
                case "hrd":
                    return redirect()->intended(route('hrd.dashboard'))->with("success", "Selamat Datang kembali". auth()->user()->fullname . " ". ".");
                case "manajer":
                    return redirect()->intended(route('manajer.dashboard'));
                default:
                    abort(403, "Forbidden: You don’t have permission to access on this server");
                    break;
            }
        }

        return back()->withErrors([
            'userInvalid' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
