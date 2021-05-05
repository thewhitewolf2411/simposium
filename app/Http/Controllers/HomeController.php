<?php

namespace App\Http\Controllers;

use App\CanvasData;
use App\CanvasEvents;
use App\ExcibitionElement;
use Illuminate\Http\Request;

use App\Webinar;
use App\Sponsors;
use App\Summary;
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
        
        $booths = CanvasData::all();

        return view('dashboard.booths.booths')->with(['booths'=>$booths]);

    }

    public function showBooth($parameter){

        $booth = CanvasData::find($parameter);
        $boothEvent1 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 1)->first();
        $boothEvent2 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 2)->first();
        $boothEvent3 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 3)->first();
        $boothEvent4 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 4)->first();
        $boothEvent5 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 5)->first();
        $boothEvent6 = CanvasEvents::where('canvas_id', $parameter)->where('event_number', 6)->first();

        $e1 = ['x1'=>$boothEvent1->x1, 'x2'=>$boothEvent1->x2, 'y1'=>$boothEvent1->y1, 'y2'=>$boothEvent1->y2];
        $e2 = ['x1'=>$boothEvent2->x1, 'x2'=>$boothEvent2->x2, 'y1'=>$boothEvent2->y1, 'y2'=>$boothEvent2->y2];
        $e3 = ['x1'=>$boothEvent3->x1, 'x2'=>$boothEvent3->x2, 'y1'=>$boothEvent3->y1, 'y2'=>$boothEvent3->y2];
        $e4 = ['x1'=>$boothEvent4->x1, 'x2'=>$boothEvent4->x2, 'y1'=>$boothEvent4->y1, 'y2'=>$boothEvent4->y2];
        $e5 = ['x1'=>$boothEvent5->x1, 'x2'=>$boothEvent5->x2, 'y1'=>$boothEvent5->y1, 'y2'=>$boothEvent5->y2];
        $e6 = ['x1'=>$boothEvent6->x1, 'x2'=>$boothEvent6->x2, 'y1'=>$boothEvent6->y1, 'y2'=>$boothEvent6->y2];

        return view('dashboard.booths.booth', ['booth'=>$booth, 'e1'=>$e1, 'e2'=>$e2, 'e3'=>$e3, 'e4'=>$e4, 'e5'=>$e5, 'e6'=>$e6]);

    }

    public function getBoothData(Request $request){

        $requestData = $request->all();

        $canvas_id = $requestData['canvas_id'];
        $event_id = $requestData['event_id'];

        $eventData = CanvasEvents::where('event_number', $event_id)->where('canvas_id', $canvas_id)->get();

        if(count($eventData)>1){
            return response()->json([
                'success'=>true,
                'morethanone'=>true,
                'events'=>$eventData
            ]);
        }

        $video = false;
        $pdf = false;
        $image = false;
        $ppt = false;
        $url = false;

        switch($eventData[0]->event_type){
            case 1:
                $video = true;
                $image = false;
                $pdf = false;
                $ppt = false;
                $url = false;
                break;
            case 2:
                $video = false;
                $pdf = true;
                $image = false;
                $ppt = false;
                $url = false;
                break;
            case 3:
                $video = false;
                $pdf = false;
                $image = true;
                $ppt = false;
                $url = false;
                break;
            case 4:
                $video = false;
                $pdf = false;
                $image = false;
                $ppt = true;
                $url = false;
                break;
            case 5:
                $video = false;
                $pdf = false;
                $image = false;
                $ppt = false;
                $url = true;
                break;
        }

        return response()->json([
            'success'=>true,
            'morethanone'=>false,
            'video'=>$video,
            'pdf'=>$pdf,
            'image'=>$image,
            'ppt'=>$ppt,
            'url'=>$url,
            'path'=>$eventData[0]->file_path
        ]);
    }

    public function getSingleBoothData(Request $request){
        $requestData = $request->all();

        $event_id = $requestData['event_id'];

        $eventData = CanvasEvents::find($event_id);

        $video = false;
        $pdf = false;
        $image = false;
        $ppt = false;
        $url = false;

        switch($eventData->event_type){
            case 1:
                $video = true;
                $image = false;
                $pdf = false;
                $ppt = false;
                $url = false;
                break;
            case 2:
                $video = false;
                $pdf = true;
                $image = false;
                $ppt = false;
                $url = false;
                break;
            case 3:
                $video = false;
                $pdf = false;
                $image = true;
                $ppt = false;
                $url = false;
                break;
            case 4:
                $video = false;
                $pdf = false;
                $image = false;
                $ppt = true;
                $url = false;
                break;
            case 5:
                $video = false;
                $pdf = false;
                $image = false;
                $ppt = false;
                $url = true;
                break;
        }

        return response()->json([
            'success'=>true,
            'morethanone'=>false,
            'video'=>$video,
            'pdf'=>$pdf,
            'image'=>$image,
            'ppt'=>$ppt,
            'url'=>$url,
            'path'=>$eventData->file_path
        ]);

    }


    //webinars
    public function showWebinars(){

        $webinars = Webinar::all();
        return view('dashboard.webinars.webinars')->with(['webinars'=>$webinars]);

    }

    public function showExibition(){

        $excibitionElements = ExcibitionElement::all();

        return view('dashboard.exibition.exibition', ['excibitionElements'=>$excibitionElements]);

    }

    public function getExhibitionData(Request $request){
        $requestData = $request->all();

        $exhibition_id = $requestData['exhibition_id'];

        $exhibition_data = ExcibitionElement::find($exhibition_id);

        return response()->json([
            'success'=>true,
            'exhibition_data'=>$exhibition_data->excibition_image,
        ]);
    }

    public function showSummary(){

        $summaryElements = Summary::all();

        return view('dashboard.summary.summary', ['summaryElements'=>$summaryElements]);

    }

    public function getSummaryData(Request $request){
        $requestData = $request->all();

        $summary_id = $requestData['exhibition_id'];

        $summary_data = Summary::find($summary_id);

        return response()->json([
            'success'=>true,
            'summary_data'=>$summary_data->summary_file,
        ]);
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
