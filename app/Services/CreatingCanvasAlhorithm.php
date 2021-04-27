<?php

namespace App\Services;

use App\CanvasData;
use App\CanvasEvents;

class CreatingCanvasAlhorithm
{
    private $canvas;
    private $eventData;

    public function __construct(CanvasData $canvas, array $eventData)
    {
        $this->canvas = $canvas;
        $this->eventData = $eventData;
    }


    public function createCanvasEvents(){

        switch($this->canvas->booth_type){
            case 1:
                $coordinates = [
                    'event1' => [
                        "x1"=>1238,
                        "x2"=>130,
                        "y1"=>404,
                        "y2"=>412
                    ],
                    'event2' => [
                        "x1"=>988,
                        "x2"=>38,
                        "y1"=>340,
                        "y2"=>50
                    ],
                    'event3' => [
                        "x1"=>624,
                        "x2"=>232,
                        "y1"=>-6,
                        "y2"=>129
                    ],
                    'event4' => [
                        "x1"=>600,
                        "x2"=>279,
                        "y1"=>92,
                        "y2"=>146
                    ],
                    'event5' => [
                        "x1"=>467,
                        "x2"=>38,
                        "y1"=>13,
                        "y2"=>50
                    ],
                    'event6' => [
                        "x1"=>160,
                        "x2"=>111,
                        "y1"=>-383,
                        "y2"=>412
                    ]
                ];
                if($this->_createTypeOneEvent($coordinates)){
                    return "/simpozij/dashboard";
                }
                break;
            case 2:
                $coordinates = [
                    'event1' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event2' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event3' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event4' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event5' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event6' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ]
                ];
                if($this->_createTypeOneEvent($coordinates)){
                    
                }
                break;
            case 3:
                $coordinates = [
                    'event1' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event2' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event3' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event4' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event5' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ],
                    'event6' => [
                        "x1"=>0,
                        "x2"=>0,
                        "y1"=>0,
                        "y2"=>0
                    ]
                ];
                if($this->_createTypeOneEvent($coordinates)){
                    
                }
                break;
        }

    }

    private function _createTypeOneEvent(array $coordinates){
        $events = $this->eventData;
        $fileNameToStore1 = null;
        $fileNameToStore2 = null;
        $fileNameToStore3 = null;
        $fileNameToStore4 = null;
        $fileNameToStore5 = null;
        $fileNameToStore6 = null;
        
        if($events['first_event_input']){
            $filenameWithExt = $events['first_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input']->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input']->storeAs('public/canvas_data',$fileNameToStore1);
        }
        if($events['second_event_input']){
            $filenameWithExt = $events['second_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input']->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input']->storeAs('public/canvas_data',$fileNameToStore2);
        }
        if($events['third_event_input']){
            $filenameWithExt = $events['third_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input']->getClientOriginalExtension();
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input']->storeAs('public/canvas_data',$fileNameToStore3);
        }
        if($events['fourth_event_input']){
            $filenameWithExt = $events['fourth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input']->getClientOriginalExtension();
            $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input']->storeAs('public/canvas_data',$fileNameToStore4);
        }
        if($events['fifth_event_input']){
            $filenameWithExt = $events['fifth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input']->getClientOriginalExtension();
            $fileNameToStore5 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input']->storeAs('public/canvas_data',$fileNameToStore5);
        }
        if($events['sixth_event_input']){
            $filenameWithExt = $events['sixth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input']->getClientOriginalExtension();
            $fileNameToStore6 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input']->storeAs('public/canvas_data',$fileNameToStore6);
        }

        $function1 = null;
        $function2 = null;
        $function3 = null;
        $function4 = null;
        $function5 = null;
        $function6 = null;


        switch($events['first_event']){
            case 1:
                $function1 = "function event1_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore1 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function1 = "function event1_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore1 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function1 = "function event1_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore1 . "' > &quot);
                }";
                break;
            case 4:
                $function1 = "function event1_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore1 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        switch($events['second_event']){
            case 1:
                $function2 = "function event2_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore2 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function2 = "function event2_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore2 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function2 = "function event2_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore2 . "' > &quot);
                }";
                break;
            case 4:
                $function2 = "function event2_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore2 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        switch($events['third_event']){
            case 1:
                $function2 = "function event3_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore3 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function2 = "function event3_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore3 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function2 = "function event3_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore3 . "' > &quot);
                }";
                break;
            case 4:
                $function2 = "function event3_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore3 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        switch($events['fourth_event']){
            case 1:
                $function2 = "function event4_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore4 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function2 = "function event4_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore4 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function2 = "function event4_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore4 . "' > &quot);
                }";
                break;
            case 4:
                $function2 = "function event4_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore4 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        switch($events['fifth_event']){
            case 1:
                $function2 = "function event5_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore5 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function2 = "function event5_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore5 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function2 = "function event5_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore5 . "' > &quot);
                }";
                break;
            case 4:
                $function2 = "function event5_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore5 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        switch($events['sixth_event']){
            case 1:
                $function2 = "function event6_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<video width='320' height='240' controls><source src='/public/canvas_data/" . $fileNameToStore6 . "' type='video/mp4'><source src='movie.ogg' type='video/ogg'></video> &quot);
                }";
                break;
            case 2:
                $function2 = "function event6_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='/public/canvas_data/" . $fileNameToStore6 . "' </iframe> &quot);
                }";
                break;
            case 3:
                $function2 = "function event6_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<img src='/public/canvas_data/" . $fileNameToStore6 . "' > &quot);
                }";
                break;
            case 4:
                $function2 = "function event6_canvas_" . $events['canvas_id'] . "(){
                    $('#eventModal').modal('show'); 
                    $('#eventModal modal-body').empty();
                    $('#eventModal modal-body').append(&quot<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=['/public/canvas_data/" . $fileNameToStore6 . "'] frameborder='0'> &quot);
                }";
                break;
        }

        $script = $function1.$function2.$function3.$function4.$function5.$function6;
        $scriptName = public_path() . '/js/' . \Carbon\Carbon::now()->format('Y-m-d-h-s-i') . $events['canvas_id'] . '.js';
        
        file_put_contents($scriptName, $script);

        $canvasEvent1 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['first_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event1_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event1']['x1'],
            'x2'=>$coordinates['event1']['x2'],
            'y1'=>$coordinates['event1']['y1'],
            'y2'=>$coordinates['event1']['y2'],
        ];
        $canvasEvent2 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['second_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event2_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event2']['x1'],
            'x2'=>$coordinates['event2']['x2'],
            'y1'=>$coordinates['event2']['y1'],
            'y2'=>$coordinates['event2']['y2'],
        ];
        $canvasEvent3 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['third_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event3_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event3']['x1'],
            'x2'=>$coordinates['event3']['x2'],
            'y1'=>$coordinates['event3']['y1'],
            'y2'=>$coordinates['event3']['y2'],
        ];
        $canvasEvent4 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fourth_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event4_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event4']['x1'],
            'x2'=>$coordinates['event4']['x2'],
            'y1'=>$coordinates['event4']['y1'],
            'y2'=>$coordinates['event4']['y2'],
        ];
        $canvasEvent5 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fifth_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event5_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event5']['x1'],
            'x2'=>$coordinates['event5']['x2'],
            'y1'=>$coordinates['event5']['y1'],
            'y2'=>$coordinates['event5']['y2'],
        ];
        $canvasEvent6 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['sixth_event'],
            'script_path'=>$scriptName,
            'function_name'=>"event6_canvas_" . $events['canvas_id'] . "()",
            'x1'=>$coordinates['event6']['x1'],
            'x2'=>$coordinates['event6']['x2'],
            'y1'=>$coordinates['event6']['y1'],
            'y2'=>$coordinates['event6']['y2'],
        ];

        CanvasEvents::create($canvasEvent1);
        CanvasEvents::create($canvasEvent2);
        CanvasEvents::create($canvasEvent3);
        CanvasEvents::create($canvasEvent4);
        CanvasEvents::create($canvasEvent5);
        CanvasEvents::create($canvasEvent6);

        return true;

    }

    private function _createTypeTwoEvent(){
        $events = $this->eventData;
    }

    private function _createTypeThreeEvent(){
        $events = $this->eventData;
    }

}
