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

        $staticUser[0] = [
            'email' => 'user@gmail.com',
            'password' => 'password',            
        ];
        $staticUser[1] = [
            'email' => 'user1@gmail.com',
            'password' => 'password',            
        ];
        $staticUser[2] = [
            'email' => 'user2@gmail.com',
            'password' => 'password',            
        ];


        foreach($staticUser as $userStatic)
        {

            if ($credentials['email'] === $userStatic['email'] && $credentials['password']) {
          
                session()->put('user_id',2);
                return redirect()->to('/');
                
            }
            else{
                return redirect()->to('/admin');
            }
        }
        return redirect()->route('login')->withErrors('Invalid credentials');

        
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect()->route('login');
    }
}
