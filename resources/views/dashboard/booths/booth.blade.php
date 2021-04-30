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

                        @foreach($boothEvents as $key=>$boothEvent)

                            <a role="button" data-toggle="modal" data-target="#eventModal" onclick="getCanvasData({{$booth->id}}, {{$boothEvent->id}})" class="booth-btn booth-event-{{$key}}" style="display:flex; position: relative; top:{{$boothEvent->y1}}px; left:{{$boothEvent->x1}}px; width:{{$boothEvent->x2}}px; height:{{$boothEvent->y2}}px">
                                <div class=""></div>
                            </a>

                        @endforeach
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
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection