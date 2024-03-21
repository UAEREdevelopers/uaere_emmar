<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $showcases  = ['1.jpg','2.jpg','3.jpg','4.jpg'];


        $teams = array();
        $teamName = ['Vijdhan','Regina','Saad','Zahid'];
        $teamImages = ['1.webp','2.webp','3.webp','4.webp'];
        foreach ($teamName as $key => $value) {
            
            $teams[$key]["person_name"] = $teamName[$key];
            $teams[$key]["person_image"] = $teamImages[$key];

        }
        
        

        return view("home_index",[
            'showcases'=> $showcases,
            'teams'=> $teams,
            
        ]);
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