<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginFormAdmin()
    {
        return view('auth.loginadmin');
    }

    public function loginadmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->usertype == 1) {
                $request->session()->regenerate();
                return redirect()->intended($this->redirectTo);
            }
            else {
                Auth::logout(); // Logout the user
                return back()->withErrors([
                    'email' => 'You are not authorized to access this page.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'You are not authorized to access this page.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
