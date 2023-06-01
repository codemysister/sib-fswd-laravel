<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if($user->getRoleName() == 'admin' || $user->getRoleName() == 'staff'){
                return redirect()->intended('/dashboard/slider');
            }else{
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }


        public function registerForm()
        {
            return view('auth.register');
        }

        public function register(Request $request)
        {
            $credentials = $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required'],
                'role' => ['required']
            ]);

            if($credentials['role'] == 'user'){
                $credentials['role_id'] = 3;
            }else if($credentials['role'] == 'staff'){
                $credentials['role_id'] = 2;
            }

            $credentials['password'] = bcrypt($credentials['password']);

            $user = User::create($credentials);

            if($user->getRoleName() == 'admin' || $user->getRoleName() == 'staff'){
                return redirect()->intended('/dashboard/slider');
            }else{
                return redirect()->intended('/');
            }

        }

        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }

    }
