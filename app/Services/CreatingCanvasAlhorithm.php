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
                        "y1"=>419,  // 404
                        "y2"=>412
                    ],
                    'event2' => [
                        "x1"=>988,
                        "x2"=>38,
                        "y1"=>351,  // 340
                        "y2"=>50
                    ],
                    'event3' => [
                        "x1"=>624,
                        "x2"=>232,
                        "y1"=>5,    // -6
                        "y2"=>129
                    ],
                    'event4' => [
                        "x1"=>600,
                        "x2"=>279,
                        "y1"=>107,   // 92
                        "y2"=>146
                    ],
                    'event5' => [
                        "x1"=>467,
                        "x2"=>38,
                        "y1"=>25,   // 13
                        "y2"=>50
                    ],
                    'event6' => [
                        "x1"=>160,
                        "x2"=>111,
                        "y1"=>-368, // -383
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
                        "y1"=>489,  // 455
                        "y2"=>394
                    ],
                    'event2' => [
                        "x1"=>967,
                        "x2"=>42,
                        "y1"=>336,  // 305
                        "y2"=>50
                    ],
                    'event3' => [
                        "x1"=>650,
                        "x2"=>178,
                        "y1"=>55,   // 20
                        "y2"=>100
                    ],
                    'event4' => [
                        "x1"=>615,
                        "x2"=>252,
                        "y1"=>183,  // 149
                        "y2"=>104
                    ],
                    'event5' => [
                        "x1"=>466,
                        "x2"=>42,
                        "y1"=>85,   // 50
                        "y2"=>50
                    ],
                    'event6' => [
                        "x1"=>70,
                        "x2"=>205,
                        "y1"=>-207, // -241
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
                        "x1"=>1165,
                        "x2"=>188,
                        "y1"=>415,
                        "y2"=>469
                    ],
                    'event2' => [
                        "x1"=>967,
                        "x2"=>137,
                        "y1"=>-10,
                        "y2"=>365
                    ],
                    'event3' => [
                        "x1"=>655,
                        "x2"=>182,
                        "y1"=>-400,
                        "y2"=>98
                    ],
                    'event4' => [
                        "x1"=>644,
                        "x2"=>199,
                        "y1"=>-217,
                        "y2"=>109
                    ],
                    'event5' => [
                        "x1"=>382,
                        "x2"=>139,
                        "y1"=>-580,
                        "y2"=>371
                    ],
                    'event6' => [
                        "x1"=>126,
                        "x2"=>186,
                        "y1"=>-1000,
                        "y2"=>481
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
        $fileNameToStore1_1 = null;
        $fileNameToStore1_2 = null;
        $fileNameToStore1_3 = null;
        $fileNameToStore1_4 = null;
        $fileNameToStore2 = null;
        $fileNameToStore2_1 = null;
        $fileNameToStore2_2 = null;
        $fileNameToStore2_3 = null;
        $fileNameToStore2_4 = null;
        $fileNameToStore3 = null;
        $fileNameToStore3_1 = null;
        $fileNameToStore3_2 = null;
        $fileNameToStore3_3 = null;
        $fileNameToStore3_4 = null;
        $fileNameToStore4 = null;
        $fileNameToStore4_1 = null;
        $fileNameToStore4_2 = null;
        $fileNameToStore4_3 = null;
        $fileNameToStore4_4 = null;
        $fileNameToStore5 = null;
        $fileNameToStore5_1 = null;
        $fileNameToStore5_2 = null;
        $fileNameToStore5_3 = null;
        $fileNameToStore5_4 = null;
        $fileNameToStore6 = null;
        $fileNameToStore6_1 = null;
        $fileNameToStore6_2 = null;
        $fileNameToStore6_3 = null;
        $fileNameToStore6_4 = null;
        
        //first event
        if($events['first_event_input'] && $events['first_event'] != '5'){
            $filenameWithExt = $events['first_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input']->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input']->storeAs('public/canvas_data',$fileNameToStore1);
        }else{$fileNameToStore1 = $events['first_event_input'];}
        if(array_key_exists("first_event_input_optional_1", $events) && $events['first_event_optional_1'] != '5'){
            $filenameWithExt = $events['first_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore1_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore1_1);
        }else{if(array_key_exists("first_event_input_optional_1", $events)) {$fileNameToStore1_1 = $events['first_event_input_optional_1'];}}
        if(array_key_exists("first_event_input_optional_2", $events) && $events['first_event_optional_2'] != '5'){
            $filenameWithExt = $events['first_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore1_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore1_2);
        }else{if(array_key_exists("first_event_input_optional_2", $events)) {$fileNameToStore1_2 = $events['first_event_input_optional_2'];}}
        if(array_key_exists("first_event_input_optional_3", $events) && $events['first_event_optional_3'] != '5'){
            $filenameWithExt = $events['first_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore1_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore1_3);
        }else{if(array_key_exists("first_event_input_optional_3", $events)) {$fileNameToStore1_3 = $events['first_event_input_optional_3'];}}
        if(array_key_exists("first_event_input_optional_4", $events) && $events['first_event_optional_4'] != '5'){
            $filenameWithExt = $events['first_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['first_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore1_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['first_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore1_4);
        }else{if(array_key_exists("first_event_input_optional_4", $events)) {$fileNameToStore1_4 = $events['first_event_input_optional_4'];}}

        //Second event
        if($events['second_event_input'] && $events['second_event'] != '5'){
            $filenameWithExt = $events['second_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input']->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input']->storeAs('public/canvas_data',$fileNameToStore2);
        }else{$fileNameToStore2 = $events['second_event_input'];}
        if(array_key_exists("second_event_input_optional_1", $events) && $events['second_event_optional_1'] != '5'){
            $filenameWithExt = $events['second_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore2_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore2_1);
        }else{if(array_key_exists("second_event_input_optional_1", $events)) {$fileNameToStore2_1 = $events['second_event_input_optional_1'];}}
        if(array_key_exists("second_event_input_optional_2", $events) && $events['second_event_optional_2'] != '5'){
            $filenameWithExt = $events['second_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore2_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore2_2);
        }else{if(array_key_exists("second_event_input_optional_2", $events)) {$fileNameToStore2_2 = $events['second_event_input_optional_2'];}}
        if(array_key_exists("second_event_input_optional_3", $events) && $events['second_event_optional_3'] != '5'){
            $filenameWithExt = $events['second_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore2_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore2_3);
        }else{if(array_key_exists("second_event_input_optional_3", $events)) {$fileNameToStore2_3 = $events['second_event_input_optional_3'];}}
        if(array_key_exists("second_event_input_optional_3", $events) && $events['second_event_optional_4'] != '5'){
            $filenameWithExt = $events['second_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['second_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore2_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['second_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore2_4);
        }else{if(array_key_exists("second_event_input_optional_4", $events)) {$fileNameToStore2_4 = $events['second_event_input_optional_4'];}}

        //third event
        if($events['third_event_input'] && $events['third_event'] != '5'){
            $filenameWithExt = $events['third_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input']->getClientOriginalExtension();
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input']->storeAs('public/canvas_data',$fileNameToStore3);
        }else{$fileNameToStore3 = $events['third_event_input'];}
        if(array_key_exists("third_event_input_optional_1", $events) && $events['third_event_optional_1'] != '5'){
            $filenameWithExt = $events['third_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore3_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore3_1);
        }else{if(array_key_exists("third_event_input_optional_1", $events)) {$fileNameToStore3_1 = $events['third_event_input_optional_1'];}}
        if(array_key_exists("third_event_input_optional_2", $events) && $events['third_event_optional_2'] != '5'){
            $filenameWithExt = $events['third_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore3_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore3_2);
        }else{if(array_key_exists("third_event_input_optional_2", $events)) {$fileNameToStore3_2 = $events['third_event_input_optional_2'];}}
        if(array_key_exists("third_event_input_optional_3", $events) && $events['third_event_optional_3'] != '5'){
            $filenameWithExt = $events['third_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore3_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore3_3);
        }else{if(array_key_exists("third_event_input_optional_3", $events)) {$fileNameToStore3_3 = $events['third_event_input_optional_3'];}}
        if(array_key_exists("third_event_input_optional_4", $events) && $events['third_event_optional_4'] != '5'){
            $filenameWithExt = $events['third_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['third_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore3_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['third_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore3_4);
        }else{if(array_key_exists("third_event_input_optional_4", $events)) {$fileNameToStore3_3 = $events['third_event_input_optional_4'];}}

        //fourth event
        if($events['fourth_event_input'] && $events['fourth_event'] != '5'){
            $filenameWithExt = $events['fourth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input']->getClientOriginalExtension();
            $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input']->storeAs('public/canvas_data',$fileNameToStore4);
        }else{$fileNameToStore4 = $events['fourth_event_input'];}
        if(array_key_exists("fourth_event_input_optional_1", $events) && $events['fourth_event_optional_1'] != '5'){
            $filenameWithExt = $events['fourth_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore4_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore4_1);
        }else{if(array_key_exists("fourth_event_input_optional_1", $events)) {$fileNameToStore4_1 = $events['fourth_event_input_optional_1'];}}
        if(array_key_exists("fourth_event_input_optional_2", $events) && $events['fourth_event_optional_2'] != '5'){
            $filenameWithExt = $events['fourth_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore4_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore4_2);
        }else{if(array_key_exists("fourth_event_input_optional_2", $events)) {$fileNameToStore4_2 = $events['fourth_event_input_optional_2'];}}
        if(array_key_exists("fourth_event_input_optional_3", $events) && $events['fourth_event_optional_3'] != '5'){
            $filenameWithExt = $events['fourth_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore4_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore4_3);
        }else{if(array_key_exists("fourth_event_input_optional_3", $events)) {$fileNameToStore4_3 = $events['fourth_event_input_optional_3'];}}
        if(array_key_exists("fourth_event_input_optional_4", $events) && $events['fourth_event_optional_4'] != '5'){
            $filenameWithExt = $events['fourth_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fourth_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore4_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['fourth_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore4_4);
        }else{if(array_key_exists("fourth_event_input_optional_4", $events)) {$fileNameToStore4_4 = $events['fourth_event_input_optional_4'];}}

        //fifth event
        if($events['fifth_event_input'] && $events['fifth_event'] != '5'){
            $filenameWithExt = $events['fifth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input']->getClientOriginalExtension();
            $fileNameToStore5 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input']->storeAs('public/canvas_data',$fileNameToStore5);
        }else{$fileNameToStore5 = $events['fifth_event_input'];}
        if(array_key_exists("fifth_event_input_optional_1", $events) && $events['fifth_event_optional_1'] != '5'){
            $filenameWithExt = $events['fifth_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore5_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore5_1);
        }else{if(array_key_exists("fifth_event_input_optional_1", $events)) {$fileNameToStore5_1 = $events['fifth_event_input_optional_1'];}}
        if(array_key_exists("fifth_event_input_optional_2", $events) && $events['fifth_event_optional_2'] != '5'){
            $filenameWithExt = $events['fifth_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore5_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore5_2);
        }else{if(array_key_exists("fifth_event_input_optional_2", $events)) {$fileNameToStore5_2 = $events['fifth_event_input_optional_2'];}}
        if(array_key_exists("fifth_event_input_optional_3", $events) && $events['fifth_event_optional_3'] != '5'){
            $filenameWithExt = $events['fifth_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore5_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore5_3);
        }else{if(array_key_exists("fifth_event_input_optional_3", $events)) {$fileNameToStore5_3 = $events['fifth_event_input_optional_3'];}}
        if(array_key_exists("fifth_event_input_optional_4", $events) && $events['fifth_event_optional_4'] != '5'){
            $filenameWithExt = $events['fifth_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['fifth_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore5_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['fifth_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore5_4);
        }else{if(array_key_exists("fifth_event_input_optional_4", $events)) {$fileNameToStore5_4 = $events['fifth_event_input_optional_4'];}}

        //sixth event
        if($events['sixth_event_input'] && $events['sixth_event'] != '5'){
            $filenameWithExt = $events['sixth_event_input']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input']->getClientOriginalExtension();
            $fileNameToStore6 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input']->storeAs('public/canvas_data',$fileNameToStore6);
        }else{$fileNameToStore6 = $events['sixth_event_input'];}
        if(array_key_exists("sixth_event_input_optional_1", $events) && $events['sixth_event_optional_1'] != '5'){
            $filenameWithExt = $events['sixth_event_input_optional_1']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input_optional_1']->getClientOriginalExtension();
            $fileNameToStore6_1 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input_optional_1']->storeAs('public/canvas_data',$fileNameToStore6_1);
        }else{if(array_key_exists("sixth_event_input_optional_1", $events)) {$fileNameToStore6_1 = $events['sixth_event_input_optional_1'];}}
        if(array_key_exists("sixth_event_input_optional_2", $events) && $events['sixth_event_optional_2'] != '5'){
            $filenameWithExt = $events['sixth_event_input_optional_2']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input_optional_2']->getClientOriginalExtension();
            $fileNameToStore6_2 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input_optional_2']->storeAs('public/canvas_data',$fileNameToStore6_2);
        }else{if(array_key_exists("sixth_event_input_optional_2", $events)) {$fileNameToStore6_2 = $events['sixth_event_input_optional_2'];}}
        if(array_key_exists("sixth_event_input_optional_3", $events) && $events['sixth_event_optional_3'] != '5'){
            $filenameWithExt = $events['sixth_event_input_optional_3']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input_optional_3']->getClientOriginalExtension();
            $fileNameToStore6_3 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input_optional_3']->storeAs('public/canvas_data',$fileNameToStore6_3);
        }else{if(array_key_exists("sixth_event_input_optional_3", $events)) {$fileNameToStore6_3 = $events['sixth_event_input_optional_3'];}}
        if(array_key_exists("sixth_event_input_optional_4", $events) && $events['sixth_event_optional_4'] != '5'){
            $filenameWithExt = $events['sixth_event_input_optional_4']->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $events['sixth_event_input_optional_4']->getClientOriginalExtension();
            $fileNameToStore6_4 = $filename.'_'.time().'.'.$extension;
            $path = $events['sixth_event_input_optional_4']->storeAs('public/canvas_data',$fileNameToStore6_4);
        }else{if(array_key_exists("sixth_event_input_optional_4", $events)) {$fileNameToStore6_4 = $events['sixth_event_input_optional_4'];}}


        $canvasEvent1 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['first_event'],
            'file_path'=>$fileNameToStore1,
            'event_number'=>1,
            'x1'=>$coordinates['event1']['x1'],
            'x2'=>$coordinates['event1']['x2'],
            'y1'=>$coordinates['event1']['y1'],
            'y2'=>$coordinates['event1']['y2'],
        ];
        CanvasEvents::create($canvasEvent1);
        if(array_key_exists("first_event_input_optional_1", $events)){
            $canvasEvent1_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['first_event_optional_1'],
                'file_path'=>$fileNameToStore1_1,
                'event_number'=>1,
                'x1'=>$coordinates['event1']['x1'],
                'x2'=>$coordinates['event1']['x2'],
                'y1'=>$coordinates['event1']['y1'],
                'y2'=>$coordinates['event1']['y2'],
            ];

            CanvasEvents::create($canvasEvent1_1);
        }
        if(array_key_exists("first_event_input_optional_2", $events)){
            $canvasEvent1_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['first_event_optional_2'],
                'file_path'=>$fileNameToStore1_2,
                'event_number'=>1,
                'x1'=>$coordinates['event1']['x1'],
                'x2'=>$coordinates['event1']['x2'],
                'y1'=>$coordinates['event1']['y1'],
                'y2'=>$coordinates['event1']['y2'],
            ];

            CanvasEvents::create($canvasEvent1_2);
        }
        if(array_key_exists("first_event_input_optional_3", $events)){
            $canvasEvent1_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['first_event_optional_3'],
                'file_path'=>$fileNameToStore1_3,
                'event_number'=>1,
                'x1'=>$coordinates['event1']['x1'],
                'x2'=>$coordinates['event1']['x2'],
                'y1'=>$coordinates['event1']['y1'],
                'y2'=>$coordinates['event1']['y2'],
            ];

            CanvasEvents::create($canvasEvent1_3);
        }
        if(array_key_exists("first_event_input_optional_4", $events)){
            $canvasEvent1_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['first_event_optional_4'],
                'file_path'=>$fileNameToStore1_4,
                'event_number'=>1,
                'x1'=>$coordinates['event1']['x1'],
                'x2'=>$coordinates['event1']['x2'],
                'y1'=>$coordinates['event1']['y1'],
                'y2'=>$coordinates['event1']['y2'],
            ];

            CanvasEvents::create($canvasEvent1_4);
        }
        $canvasEvent2 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['second_event'],
            'file_path'=>$fileNameToStore2,
            'event_number'=>2,
            'x1'=>$coordinates['event2']['x1'],
            'x2'=>$coordinates['event2']['x2'],
            'y1'=>$coordinates['event2']['y1'],
            'y2'=>$coordinates['event2']['y2'],
        ];
        CanvasEvents::create($canvasEvent2);
        if(array_key_exists("second_event_input_optional_1", $events)){
            $canvasEvent2_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['second_event_optional_1'],
                'file_path'=>$fileNameToStore2_1,
                'event_number'=>2,
                'x1'=>$coordinates['event2']['x1'],
                'x2'=>$coordinates['event2']['x2'],
                'y1'=>$coordinates['event2']['y1'],
                'y2'=>$coordinates['event2']['y2'],
            ];

            CanvasEvents::create($canvasEvent2_1);
        }
        if(array_key_exists("second_event_input_optional_2", $events)){
            $canvasEvent2_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['second_event_optional_2'],
                'file_path'=>$fileNameToStore2_2,
                'event_number'=>2,
                'x1'=>$coordinates['event2']['x1'],
                'x2'=>$coordinates['event2']['x2'],
                'y1'=>$coordinates['event2']['y1'],
                'y2'=>$coordinates['event2']['y2'],
            ];

            CanvasEvents::create($canvasEvent2_2);
        }
        if(array_key_exists("second_event_input_optional_3", $events)){
            $canvasEvent2_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['second_event_optional_3'],
                'file_path'=>$fileNameToStore2_3,
                'event_number'=>2,
                'x1'=>$coordinates['event2']['x1'],
                'x2'=>$coordinates['event2']['x2'],
                'y1'=>$coordinates['event2']['y1'],
                'y2'=>$coordinates['event2']['y2'],
            ];

            CanvasEvents::create($canvasEvent2_3);
        }
        if(array_key_exists("second_event_input_optional_4", $events)){
            $canvasEvent2_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['second_event_optional_4'],
                'file_path'=>$fileNameToStore2_4,
                'event_number'=>2,
                'x1'=>$coordinates['event2']['x1'],
                'x2'=>$coordinates['event2']['x2'],
                'y1'=>$coordinates['event2']['y1'],
                'y2'=>$coordinates['event2']['y2'],
            ];

            CanvasEvents::create($canvasEvent2_4);
        }
        $canvasEvent3 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['third_event'],
            'file_path'=>$fileNameToStore3,
            'event_number'=>3,
            'x1'=>$coordinates['event3']['x1'],
            'x2'=>$coordinates['event3']['x2'],
            'y1'=>$coordinates['event3']['y1'],
            'y2'=>$coordinates['event3']['y2'],
        ];
        CanvasEvents::create($canvasEvent3);
        if(array_key_exists("third_event_input_optional_1", $events)){
            $canvasEvent3_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['third_event_optional_1'],
                'file_path'=>$fileNameToStore3_1,
                'event_number'=>3,
                'x1'=>$coordinates['event3']['x1'],
                'x2'=>$coordinates['event3']['x2'],
                'y1'=>$coordinates['event3']['y1'],
                'y2'=>$coordinates['event3']['y2'],
            ];

            CanvasEvents::create($canvasEvent3_1);
        }
        if(array_key_exists("third_event_input_optional_2", $events)){
            $canvasEvent3_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['third_event_optional_2'],
                'file_path'=>$fileNameToStore3_2,
                'event_number'=>3,
                'x1'=>$coordinates['event3']['x1'],
                'x2'=>$coordinates['event3']['x2'],
                'y1'=>$coordinates['event3']['y1'],
                'y2'=>$coordinates['event3']['y2'],
            ];

            CanvasEvents::create($canvasEvent3_2);
        }
        if(array_key_exists("third_event_input_optional_3", $events)){
            $canvasEvent3_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['third_event_optional_3'],
                'file_path'=>$fileNameToStore3_3,
                'event_number'=>3,
                'x1'=>$coordinates['event3']['x1'],
                'x2'=>$coordinates['event3']['x2'],
                'y1'=>$coordinates['event3']['y1'],
                'y2'=>$coordinates['event3']['y2'],
            ];

            CanvasEvents::create($canvasEvent3_3);
        }
        if(array_key_exists("third_event_input_optional_4", $events)){
            $canvasEvent3_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['third_event_optional_4'],
                'file_path'=>$fileNameToStore3_4,
                'event_number'=>3,
                'x1'=>$coordinates['event3']['x1'],
                'x2'=>$coordinates['event3']['x2'],
                'y1'=>$coordinates['event3']['y1'],
                'y2'=>$coordinates['event3']['y2'],
            ];

            CanvasEvents::create($canvasEvent3_4);
        }
        $canvasEvent4 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fourth_event'],
            'file_path'=>$fileNameToStore4,
            'event_number'=>4,
            'x1'=>$coordinates['event4']['x1'],
            'x2'=>$coordinates['event4']['x2'],
            'y1'=>$coordinates['event4']['y1'],
            'y2'=>$coordinates['event4']['y2'],
        ];
        CanvasEvents::create($canvasEvent4);
        if(array_key_exists("fourth_event_input_optional_1", $events)){
            $canvasEvent4_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fourth_event_optional_1'],
                'file_path'=>$fileNameToStore4_1,
                'event_number'=>4,
                'x1'=>$coordinates['event4']['x1'],
                'x2'=>$coordinates['event4']['x2'],
                'y1'=>$coordinates['event4']['y1'],
                'y2'=>$coordinates['event4']['y2'],
            ];

            CanvasEvents::create($canvasEvent4_1);
        }
        if(array_key_exists("fourth_event_input_optional_2", $events)){
            $canvasEvent4_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fourth_event_optional_2'],
                'file_path'=>$fileNameToStore4_2,
                'event_number'=>4,
                'x1'=>$coordinates['event4']['x1'],
                'x2'=>$coordinates['event4']['x2'],
                'y1'=>$coordinates['event4']['y1'],
                'y2'=>$coordinates['event4']['y2'],
            ];

            CanvasEvents::create($canvasEvent4_2);
        }
        if(array_key_exists("fourth_event_input_optional_3", $events)){
            $canvasEvent4_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fourth_event_optional_3'],
                'file_path'=>$fileNameToStore4_3,
                'event_number'=>4,
                'x1'=>$coordinates['event4']['x1'],
                'x2'=>$coordinates['event4']['x2'],
                'y1'=>$coordinates['event4']['y1'],
                'y2'=>$coordinates['event4']['y2'],
            ];

            CanvasEvents::create($canvasEvent4_3);
        }
        if(array_key_exists("fourth_event_input_optional_4", $events)){
            $canvasEvent4_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fourth_event_optional_4'],
                'file_path'=>$fileNameToStore4_4,
                'event_number'=>4,
                'x1'=>$coordinates['event4']['x1'],
                'x2'=>$coordinates['event4']['x2'],
                'y1'=>$coordinates['event4']['y1'],
                'y2'=>$coordinates['event4']['y2'],
            ];

            CanvasEvents::create($canvasEvent4_4);
        }
        $canvasEvent5 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['fifth_event'],
            'file_path'=>$fileNameToStore5,
            'event_number'=>5,
            'x1'=>$coordinates['event5']['x1'],
            'x2'=>$coordinates['event5']['x2'],
            'y1'=>$coordinates['event5']['y1'],
            'y2'=>$coordinates['event5']['y2'],
        ];
        CanvasEvents::create($canvasEvent5);
        if(array_key_exists("fifth_event_input_optional_1", $events)){
            $canvasEvent5_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fifth_event_optional_1'],
                'file_path'=>$fileNameToStore5_1,
                'event_number'=>5,
                'x1'=>$coordinates['event5']['x1'],
                'x2'=>$coordinates['event5']['x2'],
                'y1'=>$coordinates['event5']['y1'],
                'y2'=>$coordinates['event5']['y2'],
            ];

            CanvasEvents::create($canvasEvent5_1);
        }
        if(array_key_exists("fifth_event_input_optional_2", $events)){
            $canvasEvent5_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fifth_event_optional_2'],
                'file_path'=>$fileNameToStore5_2,
                'event_number'=>5,
                'x1'=>$coordinates['event5']['x1'],
                'x2'=>$coordinates['event5']['x2'],
                'y1'=>$coordinates['event5']['y1'],
                'y2'=>$coordinates['event5']['y2'],
            ];

            CanvasEvents::create($canvasEvent5_2);
        }
        if(array_key_exists("fifth_event_input_optional_3", $events)){
            $canvasEvent5_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fifth_event_optional_3'],
                'file_path'=>$fileNameToStore5_3,
                'event_number'=>5,
                'x1'=>$coordinates['event5']['x1'],
                'x2'=>$coordinates['event5']['x2'],
                'y1'=>$coordinates['event5']['y1'],
                'y2'=>$coordinates['event5']['y2'],
            ];

            CanvasEvents::create($canvasEvent5_3);
        }
        if(array_key_exists("fifth_event_input_optional_4", $events)){
            $canvasEvent5_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['fifth_event_optional_4'],
                'file_path'=>$fileNameToStore5_4,
                'event_number'=>5,
                'x1'=>$coordinates['event5']['x1'],
                'x2'=>$coordinates['event5']['x2'],
                'y1'=>$coordinates['event5']['y1'],
                'y2'=>$coordinates['event5']['y2'],
            ];

            CanvasEvents::create($canvasEvent5_4);
        }
        $canvasEvent6 = [
            'canvas_id'=>$this->canvas->id,
            'event_type'=>$events['sixth_event'],
            'file_path'=>$fileNameToStore6,
            'event_number'=>6,
            'x1'=>$coordinates['event6']['x1'],
            'x2'=>$coordinates['event6']['x2'],
            'y1'=>$coordinates['event6']['y1'],
            'y2'=>$coordinates['event6']['y2'],
        ];
        CanvasEvents::create($canvasEvent6);
        if(array_key_exists("sixth_event_input_optional_1", $events)){
            $canvasEvent6_1 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['sixth_event_optional_1'],
                'file_path'=>$fileNameToStore6_1,
                'event_number'=>6,
                'x1'=>$coordinates['event6']['x1'],
                'x2'=>$coordinates['event6']['x2'],
                'y1'=>$coordinates['event6']['y1'],
                'y2'=>$coordinates['event6']['y2'],
            ];

            CanvasEvents::create($canvasEvent6_1);
        }
        if(array_key_exists("sixth_event_input_optional_2", $events)){
            $canvasEvent6_2 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['sixth_event_optional_2'],
                'file_path'=>$fileNameToStore6_2,
                'event_number'=>6,
                'x1'=>$coordinates['event6']['x1'],
                'x2'=>$coordinates['event6']['x2'],
                'y1'=>$coordinates['event6']['y1'],
                'y2'=>$coordinates['event6']['y2'],
            ];

            CanvasEvents::create($canvasEvent6_2);
        }
        if(array_key_exists("sixth_event_input_optional_3", $events)){
            $canvasEvent6_3 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['sixth_event_optional_3'],
                'file_path'=>$fileNameToStore6_3,
                'event_number'=>6,
                'x1'=>$coordinates['event6']['x1'],
                'x2'=>$coordinates['event6']['x2'],
                'y1'=>$coordinates['event6']['y1'],
                'y2'=>$coordinates['event6']['y2'],
            ];

            CanvasEvents::create($canvasEvent6_3);
        }
        if(array_key_exists("sixth_event_input_optional_4", $events)){
            $canvasEvent6_4 = [
                'canvas_id'=>$this->canvas->id,
                'event_type'=>$events['sixth_event_optional_4'],
                'file_path'=>$fileNameToStore6_4,
                'event_number'=>6,
                'x1'=>$coordinates['event6']['x1'],
                'x2'=>$coordinates['event6']['x2'],
                'y1'=>$coordinates['event6']['y1'],
                'y2'=>$coordinates['event6']['y2'],
            ];

            CanvasEvents::create($canvasEvent6_4);
        }

        return true;

    }

    private function _createTypeTwoEvent(){
        $events = $this->eventData;
    }

    private function _createTypeThreeEvent(){
        $events = $this->eventData;
    }

}
