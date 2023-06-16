<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $staticAdmin[0] = [
            'email' => 'admin@gmail.com',
            'password' => 'password',            
        ];
        $staticAdmin[1] = [
            'email' => 'admin1@gmail.com',
            'password' => 'password',            
        ];
        $staticAdmin[2] = [
            'email' => 'admin2@gmail.com',
            'password' => 'password',            
        ];


        foreach($staticAdmin as $userStatic)
        {

            if ($credentials['email'] === $userStatic['email'] && $credentials['password']) {
          
                session()->put('user_id',3);
                return redirect()->to('/admin');
                
            }
        }
        return redirect()->route('admin-login')->withErrors('Invalid credentials');

        
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect()->route('login');
    }
}
