@extends('layouts.app')

@section('content')
<div class="container">
    <div class="back-button-container" id="back-webinar" title="Svi webinari">
        <a href="/simpozij/webinars">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Webinar') }}<br>{{ $webinar->webinar_name }}</div>
                <div class="card-body webinar-link">
                    <div class="row">
                        <div class="col-3">{{ __('Predavači') }}</div>
                        <div class="col-3">{{ __('Datum održavanja webinara') }}</div>
                        <div class="col-3">{{ __('Vrijeme održavanja webinara') }}</div>
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
                    <div class="row">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
