<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\CustomUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('custom_user')->attempt(['email' => $request->email, 'password' => $request->password])) {

            /* @var \App\Models\CustomUser  $customUser  */
            $customUser = Auth::guard('custom_user')->user();
            $token = $customUser->createToken('MyApp')->plainTextToken;

            // Store the token for later use, if needed
            session(['token' => $token]);
            return redirect()->intended('home'); // Redirect to home if login is successful
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:custom_users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $customUser = CustomUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($customUser));

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::guard('custom_user')->logout();
        return redirect()->route('dashboard');
    }
}
