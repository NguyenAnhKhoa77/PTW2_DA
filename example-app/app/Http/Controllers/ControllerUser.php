<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    public function LoginView()
    {
        return view('fontend.login');
    }
    public function Login(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();
    }
    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            //'password' => 'required|string|confirmed|min:8',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
        ]);
        $user = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        if ($user->save()) {
            return redirect("login")->withSuccess('Register success. Please login!');
        }
        return back();
    }
}