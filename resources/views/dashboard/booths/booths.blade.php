@extends('layouts.app')

@section('content')

<div class="container d-flex align-items-center justify-content-center">
    <div class="back-button-container" id="back-webinar" title="Dashboard">
        <a href="/simpozij/dashboard">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Interaktivni štandovi naših sponzora') }}</div>

                <div class="d-flex flex-row">
                @foreach($booths as $booth)

                    <a href="/simpozij/booth/{{$booth->id}}" class="webinar-link w-100" style="text-align:inherit;">
                        <div class="card-body d-flex">
                            <img src="/storage/input_image/{{$booth->image_path}}" style="max-height:250px; margin:0 auto;">
                        </div>
                    </a>

                @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
