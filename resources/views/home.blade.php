@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card noborder">
                <div class="boxes">
                    <a href="/simpozij/webinars" class="card-link box">
                        <div class="card-body">
                            <img src="{{asset('/images/body/main/QA-Ikona.svg')}}">
                            {{ __('Program') }}
                        </div>
                    </a>
                    <a href="/simpozij/exibition" class="card-link box">
                        <div class="card-body">
                            <img src="{{asset('/images/body/main/Exibition-Ikona.svg')}}">
                            {{ __('Posteri') }}
                        </div>
                    </a>
                    <a id="livevideobtn" class="card-link box">
                        <div class="card-body">
                            <img src="{{asset('/images/body/main/Webinari-Ikona.svg')}}">
                            {{ __('Live video') }}
                        </div>
                    </a>
                    <a href="/simpozij/summary" class="card-link box">
                        <div class="card-body">
                            <img src="{{asset('/images/body/main/Sazetci-Ikona.svg')}}">
                            {{ __('Sažetci') }}
                        </div>
                    </a>
                    <a href="/simpozij/booth" class="card-link box">
                        <div class="card-body">
                            <img src="{{asset('/images/body/main/Standovi-Ikona.svg')}}">
                            {{ __('Sponzorski štandovi') }}
                        </div>
                    </a>
                </div>
            </div>
                @if(Auth::user()->level === 2 || Auth::user()->level === 3)
                <div class="card">
                    <div class="card-header">{{ __('Admin Panel') }}</div>
                    <a href="/simpozij/addsponsor" class="card-link">
                        <div class="card-body">
                            {{ __('Dodaj Štandove') }}
                        </div>
                    </a>
                    <a href="/simpozij/addexgibition" class="card-link">
                        <div class="card-body">
                            {{ __('Dodaj Izložbu') }}
                        </div>
                    </a>
                    <a href="/simpozij/addsummary" class="card-link">
                        <div class="card-body">
                            {{ __('Dodaj Sažetak') }}
                        </div>
                    </a>
                    <a href="/simpozij/addvideo" class="card-link">
                        <div class="card-body">
                            {{ __('Dodaj Video') }}
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
