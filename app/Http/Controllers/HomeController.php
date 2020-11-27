<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Webinar;

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
        $this->middleware('verified');
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

    public function showBooth($parameter){

        return view('dashboard.booths.booth')->with(['name'=>$parameter]);

    }


    //webinars
    public function showWebinars(){

        $webinars = Webinar::all();
        return view('dashboard.webinars.webinars')->with(['webinars'=>$webinars]);

    }

    public function showWebinar($id){
        $webinar = Webinar::where('id', $id)->first();

        return view('dashboard.webinars.webinar')->with(['webinar'=>$webinar]);
    }


    //QA
    public function showQA(){

        return view('dashboard.qa.qa');

    }


    //Ondemand
    public function showOnDemand(){

        return view('dashboard.ondemand.ondemand');

    }

    function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

        $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
        
        $data = base64_encode($api_key . $meeting_number . $time . $role);
        
        $hash = hash_hmac('sha256', $data, $api_secret, true);
        
        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
        
        //return signature, url safe base64 encoded
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
    }
}
