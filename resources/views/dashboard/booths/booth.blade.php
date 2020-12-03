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
                <div class="card-header"> <img src="{{$logo}}" height="100px"></div>



                <div class="card-body mh-100">
                    <div class="interactivity-text">

                        {{ __('Interaktivnost sa štandom je moguća samo na desktop verzijama. ')}}

                    </div>
                    <object class="objectdata" data="{{$boothpath}}" width="100%" height="100%">
                    </object>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection