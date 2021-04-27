@extends('layouts.app')

@section('content')

<div class="container">
    <div class="back-button-container" id="back-webinar" title="Dashboard">
        <a href="/simpozij/dashboard">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Interaktivni štandovi naših sponzora') }}</div>

                @foreach($booths as $booth)

                    <a href="/simpozij/booth/{{$booth->id}}" class="webinar-link" style="text-align:inherit;">
                        <div class="card-body d-flex">
                            <img src="/storage/input_image/{{$booth->image_path}}" style="max-height:100px; margin:0 auto;">
                        </div>
                    </a>

                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
