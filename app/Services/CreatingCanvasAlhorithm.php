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
                        "x1"=>1200,
                        "x2"=>207,
                        "y1"=>455,
                        "y2"=>394
                    ],
                    'event2' => [
                        "x1"=>967,
                        "x2"=>42,
                        "y1"=>305,
                        "y2"=>50
                    ],
                    'event3' => [
                        "x1"=>650,
                        "x2"=>178,
                        "y1"=>20,
                        "y2"=>100
                    ],
                    'event4' => [
                        "x1"=>615,
                        "x2"=>252,
                        "y1"=>149,
                        "y2"=>104
                    ],
                    'event5' => [
                        "x1"=>466,
                        "x2"=>42,
                        "y1"=>50,
                        "y2"=>50
                    ],
                    'event6' => [
                        "x1"=>70,
                        "x2"=>205,
                        "y1"=>-241,
                        "y2"=>390
                    ]
                ];
                if($this->_createTypeOneEvent($coordinates)){
                    return "/simpozij/dashboard";
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
                    return "/simpozij/dashboard";
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


        $canvasEvent1 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['first_event'],
            'file_path'=>$fileNameToStore1,
            'x1'=>$coordinates['event1']['x1'],
            'x2'=>$coordinates['event1']['x2'],
            'y1'=>$coordinates['event1']['y1'],
            'y2'=>$coordinates['event1']['y2'],
        ];
        $canvasEvent2 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['second_event'],
            'file_path'=>$fileNameToStore2,
            'x1'=>$coordinates['event2']['x1'],
            'x2'=>$coordinates['event2']['x2'],
            'y1'=>$coordinates['event2']['y1'],
            'y2'=>$coordinates['event2']['y2'],
        ];
        $canvasEvent3 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['third_event'],
            'file_path'=>$fileNameToStore3,
            'x1'=>$coordinates['event3']['x1'],
            'x2'=>$coordinates['event3']['x2'],
            'y1'=>$coordinates['event3']['y1'],
            'y2'=>$coordinates['event3']['y2'],
        ];
        $canvasEvent4 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fourth_event'],
            'file_path'=>$fileNameToStore4,
            'x1'=>$coordinates['event4']['x1'],
            'x2'=>$coordinates['event4']['x2'],
            'y1'=>$coordinates['event4']['y1'],
            'y2'=>$coordinates['event4']['y2'],
        ];
        $canvasEvent5 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fifth_event'],
            'file_path'=>$fileNameToStore5,
            'x1'=>$coordinates['event5']['x1'],
            'x2'=>$coordinates['event5']['x2'],
            'y1'=>$coordinates['event5']['y1'],
            'y2'=>$coordinates['event5']['y2'],
        ];
        $canvasEvent6 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['sixth_event'],
            'file_path'=>$fileNameToStore6,
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
