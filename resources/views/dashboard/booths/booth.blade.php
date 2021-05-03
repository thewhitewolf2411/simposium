@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="back-button-container" id="back-webinar" title="Dashboard">
        <a href="/simpozij/booth">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row justify-content-center w-100">
        <div class="col-md-12 mh-100">
            <div class="card mh-100">
                <div class="card-header booth-title">{{$booth->canvas_name}}</div>



                <div class="card-body mh-100 booth-body-container">
                    <div class="interactivity-text">

                        {{ __('Interaktivnost sa štandom je moguća samo na desktop verzijama. ')}}

                    </div>
                    <div class="booth-type-{{$booth->booth_type}} booth-background-image" style="background-image: url('/storage/input_image/{{$booth->image_path}}');">
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 1)" class="booth-btn booth-event-0" style="display:flex; position: relative; top:{{$e1['y1']}}px; left:{{$e1['x1']}}px; width:{{$e1['x2']}}px; height:{{$e1['y2']}}px">
                            <div class=""></div>
                        </a>
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 2)" class="booth-btn booth-event-1" style="display:flex; position: relative; top:{{$e2['y1']}}px; left:{{$e2['x1']}}px; width:{{$e2['x2']}}px; height:{{$e2['y2']}}px">
                            <div class=""></div>
                        </a>
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 3)" class="booth-btn booth-event-2" style="display:flex; position: relative; top:{{$e3['y1']}}px; left:{{$e3['x1']}}px; width:{{$e3['x2']}}px; height:{{$e3['y2']}}px">
                            <div class=""></div>
                        </a>
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 4)" class="booth-btn booth-event-3" style="display:flex; position: relative; top:{{$e4['y1']}}px; left:{{$e4['x1']}}px; width:{{$e4['x2']}}px; height:{{$e4['y2']}}px">
                            <div class=""></div>
                        </a>
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 5)" class="booth-btn booth-event-4" style="display:flex; position: relative; top:{{$e5['y1']}}px; left:{{$e5['x1']}}px; width:{{$e5['x2']}}px; height:{{$e5['y2']}}px">
                            <div class=""></div>
                        </a>
                        <a role="button" onclick="getCanvasData({{$booth->id}}, 6)" class="booth-btn booth-event-5" style="display:flex; position: relative; top:{{$e6['y1']}}px; left:{{$e6['x1']}}px; width:{{$e6['x2']}}px; height:{{$e6['y2']}}px">
                            <div class=""></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="choicemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Odaberi akciju:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection