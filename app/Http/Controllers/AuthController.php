<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\CustomUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $staticUser = [
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ];

        if ($credentials['email'] === $staticUser['email'] && $credentials['password'] === $staticUser['password']) {
            $user = new CustomUser(1, 'John Doe', $staticUser['email']);

            Auth::login($user);

            return redirect()->to('/');

        }
        return redirect()->route('login')->withErrors('Invalid credentials');
    }


    public function logout(Request $request)
    {
        $request->session()->forget('user');

        return redirect()->route('login');
    }
}
