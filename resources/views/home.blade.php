@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <a href="/simpozij/booth" class="card-link">
                        <div class="card-body">
                            {{ __('Štandovi') }}
                        </div>
                    </a>
                    <a href="/simpozij/webinars" class="card-link">
                        <div class="card-body">
                            {{ __('Webinari') }}
                        </div>
                    </a>
                    <a href="/simpozij/QA" class="card-link">
                        <div class="card-body">
                            {{ __('QA Sesije') }}
                        </div>
                    </a>
                    <a href="/simpozij/ondemand" class="card-link">
                        <div class="card-body">
                            {{ __('Video on demand') }}
                        </div>
                    </a>
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
                                {{ __('Dodaj Sponzore') }}
                            </div>
                        </a>
                        @if(Auth::user()->level === 3)
                        <a href="/simpozij/addadmins" class="card-link">
                            <div class="card-body">
                                {{ __('Dodaj Admine') }}
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
