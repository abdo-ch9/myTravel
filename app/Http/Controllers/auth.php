<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class auth extends Controller
{
    public function register()
    {
        return view("Authpages.register");
    }
    public function registerUser(Request  $request)
    {
        $request->validate([
            'nameUser' => 'required|string|max:255',
            'emailUser' => 'required|email|unique:users,email',
            'passUser' => 'required|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->input('nameUser'),
            'email' => $request->input('emailUser'),
            'password' => bcrypt($request->input('passUser')), // Hash the password
        ]);

        return redirect()->route('login')->with('user', $user);
    }
    public function login()
    {
        return view("Authpages.login");
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'emailUser' => 'required|email',
            'passUser' => 'required|min:8',
        ]);

        // Attempt to log in using the credentials provided
        $credentials = [
            'email' => $request->input('emailUser'),
            'password' => $request->input('passUser'),
        ];

        if (FacadesAuth::attempt($credentials)) {
            return redirect()->route('dashboardUser')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->withErrors(['loginError' => 'Invalid email or password']);
        }
    }

    public function logout(Request $request)
    {
        FacadesAuth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'You have been logged out successfully!');
    }
}
