<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Webinar;
use App\Sponsors;

use Auth;

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

        $booths = Sponsors::all();

        return view('dashboard.booths.booths')->with(['booths'=>$booths]);

    }

    public function showBooth($parameter){

        $booth = Sponsors::where('sponsor_name', $parameter)->first();
        $boothpath = $booth->booth_path;

        return view('dashboard.booths.booth')->with(['name'=>$parameter, 'boothpath'=>$boothpath, 'logo'=>$booth->sponsor_logo]);

    }


    //webinars
    public function showWebinars(){

        $webinars = Webinar::all();
        return view('dashboard.webinars.webinars')->with(['webinars'=>$webinars]);

    }

    public function webinar($webinarID){
        $user = Auth::user();

        $userName = $user->name;
        $userMail = $user->email;
        
        $webinar = Webinar::where('id', $webinarID)->first();

        $api_key = "BEqgk1SkT-qzy3mkWK-CMQ";
        $api_secret = "2vj0tKS2OfPh4KwW7xPVuLd6lSvlbHW1S15e";
        $meeting_number = "935 6568 6648 ";
        $time = $webinar->webinar_time;
        $role =0;

        $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
        
        $data = base64_encode($api_key . $meeting_number . $time . $role);
        
        $hash = hash_hmac('sha256', $data, $api_secret, true);
        
        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
        
        //return signature, url safe base64 encoded
        $response = rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
        

        return view('app')->with(['response'=>$response, 'meetingnumber'=>$meeting_number, 'userName'=>$userName, 'userMail'=>$userMail, 'apiKey'=>$api_key, 'webinarlink'=>$webinar->webinar_link]);
    }

    public function getData(){

        $api_key = "BEqgk1SkT-qzy3mkWK-CMQ";
        $api_secret = "2vj0tKS2OfPh4KwW7xPVuLd6lSvlbHW1S15e";
        $meeting_number = "935 6568 6648 ";
        $time = '16:00';
        $role =0;

        $time = time() * 1000 - 30000;//time in milliseconds (or close enough)
        
        $data = base64_encode($api_key . $meeting_number . $time . $role);
        
        $hash = hash_hmac('sha256', $data, $api_secret, true);
        
        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);
        
        //return signature, url safe base64 encoded
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');

    }

    public function showWebinar($id){
        $webinar = Webinar::where('id', $id)->first();

        $now = \Carbon\Carbon::now();

        $webinarDuration = \Carbon\Carbon::parse($webinar->webinar_duration)->format('H:i');
        $d = explode(':', $webinarDuration);
        $d = ($d[0] * 60) + ($d[1] * 1);

        $start = \Carbon\Carbon::parse($webinar->webinar_date . $webinar->webinar_time)->addMinutes(-60);
        
        $end = \Carbon\Carbon::parse($start)->addMinutes($d+60);
        #dd($now, $start, $end);

        $webinarStarted = "Notstarted";

        if($now->between($start, $end)){
            $webinarStarted = "Started";
        }
        else{
            if(!$now->isPast()){
                $webinarStarted = "Ended" . $end->diffForHumans();
            }
        }

        return view('dashboard.webinars.webinar')->with(['webinar'=>$webinar, 'webinarStarted'=>$webinarStarted]);
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
