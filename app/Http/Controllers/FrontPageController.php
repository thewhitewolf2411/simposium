<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Closure;

class FrontPageController extends Controller
{
    public function redirectToLogin(){

        return redirect('/auth/login');

    }

    public function showFrontPage($parameter){
        if($parameter == "login"){
            return view('login')->with('parameter', $parameter);
        }
        else if($parameter == "register"){
            return view('register')->with('parameter', $parameter);
        }
        else{
            return redirect('/auth/login');
        }

    }
}
