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
                <div class="card-header">{{ __('QA Sesije') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
