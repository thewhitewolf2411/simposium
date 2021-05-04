@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card noborder">
                <!--
                <div class="boxes">
                    <a href="/simpozij/booth" class="enter-btn">

                    </a>
                    <a href="/simpozij/webinars" class="enter-btn">

                    </a>
                    <a href="/simpozij/QA" class="enter-btn">

                    </a>
                    <a href="/simpozij/ondemand" class="enter-btn">

                    </a>
                    <a href="/simpozij/exibition" class="enter-btn">

                    </a>
                </div>-->
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
