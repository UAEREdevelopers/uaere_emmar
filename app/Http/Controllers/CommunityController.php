<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function all_communities()
    {
        return view("all_communities");
    }

    public function single_community()
    {
        return view("single_community");
    }

    


    public function authenticate_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
}