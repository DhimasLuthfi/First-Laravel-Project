<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis(){
        return view('page.register');
    }

    public function home(Request $request)
    {
        $firstname = $request->input('first_name');
        $lastname = $request->input('last_name');

        return view('page.welcome',['firstname'=>$firstname, 'lastname'=>$lastname]);
    }
}
