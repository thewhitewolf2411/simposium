<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //booths
    public function showBooths(){

        return view('dashboard.booths.booths');

    }


    //webinars
    public function showWebinars(){

        return view('dashboard.webinars.webinars');

    }


    //QA
    public function showQA(){

        return view('dashboard.qa.qa');

    }


    //Ondemand
    public function showOnDemand(){

        return view('dashboard.ondemand.ondemand');

    }
}
