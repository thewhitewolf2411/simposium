@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="back-button-container" id="back-webinar" title="Svi webinari">
        <a href="/simpozij/webinars">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $webinar->webinar_name }}</div>
                <div class="card-body webinar-link">
                    <div class="row">
                        <div class="col-3">{{ __('Predavači') }}</div>
                        <div class="col-3">{{ __('Datum održavanja webinara') }}</div>
                        <div class="col-3">{{ __('Vrijeme početka webinara') }}</div>
                        <div class="col-3">{{ __('Trajanje webinara') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-3">{{ \Carbon\Carbon::parse($webinar->webinar_date)->format('d/m/Y') }}</div>
                        <div class="col-3">{{ $webinar->webinar_time }}h</div>
                        <div class="col-3">{{ $webinar->webinar_duration }}h</div>
                    </div>
                </div>

                <div class="card-header">{{ __('Pridruži se webinaru:') }}</div>
                <div class="card-body webinar-link">
                    <div class="row px-5">
                        @if($webinarStarted == "Started")
                            <a href="/simpozij/webinars/webinar/{{$webinar->id}}">Link za webinar</a>
                        @else
                            @if($webinarStarted == "Notstarted")
                                Webinar has not started yet
                            @elseif($webinarStarted == "Ended")
                                Webinar has ended
                            @endif
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
