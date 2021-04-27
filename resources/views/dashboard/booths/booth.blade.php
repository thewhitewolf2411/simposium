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
                <div class="card-header"></div>



                <div class="card-body mh-100">
                    <div class="interactivity-text">

                        {{ __('Interaktivnost sa štandom je moguća samo na desktop verzijama. ')}}

                    </div>
                    <div class="booth-background-image" style="background-image: url('/storage/input_image/{{$booth->image_path}}');">

                        @foreach($boothEvents as $boothEvent)

                            <a role="button" class="booth-btn" style="display:flex; position: relative; top:{{$boothEvent->y1}}px; left:{{$boothEvent->x1}}px; width:{{$boothEvent->x2}}px; height:{{$boothEvent->y2}}px" >
                                <div class=""></div>
                            </a>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{$boothEvents[0]->script_path}}"></script>

@endsection