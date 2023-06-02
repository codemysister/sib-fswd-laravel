<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'required' => '* Input :attribute harus diisi.'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated = $validator->validated();

        if (Auth::attempt($validated)) {
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

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:3',
                'role' => 'required'
            ], [
                'required' => '* Input :attribute harus diisi.',
                'min' => '* Input :attribute minimal 3 karakter'
            ]);

            if ($validator->fails()) {
                return back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $validated = $validator->validated();

            if($validated['role'] == 'user'){
                $validated['role_id'] = 3;
            }else if($validated['role'] == 'staff'){
                $validated['role_id'] = 2;
            }

            $validated['password'] = bcrypt($validated['password']);

            $user = User::create($validated);

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
