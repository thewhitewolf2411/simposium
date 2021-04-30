@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card noborder">
                <div class="card-header round">{{ __('DASHBOARD') }}</div>
                    <div class="boxes">
                        <a href="/simpozij/booth" class="card-link box">
                            <div class="card-body">
                                <img src="{{asset('/images/body/main/Standovi-Ikona.svg')}}">
                                {{ __('Promo Booths') }}
                            </div>
                        </a>
                        <a href="/simpozij/webinars" class="card-link box">
                            <div class="card-body">
                                <img src="{{asset('/images/body/main/Webinari-Ikona.svg')}}">
                                {{ __('Webinars') }}
                            </div>
                        </a>
                        <a href="/simpozij/QA" class="card-link box">
                            <div class="card-body">
                                <img src="{{asset('/images/body/main/QA-Ikona.svg')}}">
                                {{ __('Agenda') }}
                            </div>
                        </a>
                        <a href="/simpozij/ondemand" class="card-link box">
                            <div class="card-body">
                                <img src="{{asset('/images/body/main/Video-Deman-Ikona.svg')}}">
                                {{ __('Video on demand') }}
                            </div>
                        </a>
                        <a href="/simpozij/exibition" class="card-link box">
                            <div class="card-body">
                                <img src="{{asset('/images/body/main/Exibition-Ikona.svg')}}">
                                {{ __('Exhibition') }}
                            </div>
                        </a>
                    </div>
            </div>
                @if(Auth::user()->level === 2 || Auth::user()->level === 3)
                <div class="card">
                    <div class="card-header">{{ __('Admin Panel') }}</div>
                        <a href="/simpozij/createwebinar" class="card-link">
                            <div class="card-body">
                                {{ __('Kreiraj webinar') }}
                            </div>
                        </a>
                        <a href="/simpozij/addpanelist" class="card-link">
                            <div class="card-body">
                                {{ __('Dodaj Paneliste') }}
                            </div>
                        </a>
                        <a href="/simpozij/addsponsor" class="card-link">
                            <div class="card-body">
                                {{ __('Dodaj Štandove') }}
                            </div>
                        </a>
                        @if(Auth::user()->level === 3)
                        <a href="/simpozij/addadmins" class="card-link">
                            <div class="card-body">
                                {{ __('Dodaj Admine') }}
                            </div>
                        </a>
                        @endif
                        @if(Auth::user()->level === 3)
                        <a href="/simpozij/addexgibition" class="card-link">
                            <div class="card-body">
                                {{ __('Dodaj Izložbu') }}
                            </div>
                        </a>
                        @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
