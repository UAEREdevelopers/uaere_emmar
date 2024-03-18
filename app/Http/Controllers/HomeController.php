<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view("home_index");
    }

    public function about_us()
    {
        return view("about_us");
    }

     public function contact_us()
    {
        return view("contact_us");
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