@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if(Session::has('fail'))
                    <div class="alert alert-danger my-0 p-3" role="alert">
                        {{Session::get('fail')}}
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success my-0 p-3" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="card-header">{{ __('Dodaj sažetak')  }}</div>

                    <div class="card-body" id="edit_events_container">
                        <form method="POST" action="{{ route('addVideo') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row">
                                <label for="video_day" class="col-md-4 col-form-label text-md-right">{{ __('Dan:') }}</label>

                                <div class="col-md-6">
                                    <input id="video_day" type="number" class="form-control" name="video_day" required >
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="video_name" class="col-md-4 col-form-label text-md-right">{{ __('Naziv videa:') }}</label>

                                <div class="col-md-6">
                                    <input id="video_name" type="text" class="form-control" name="video_name" required >
                                </div>
                            </div>

                            <div class="form-group row" id="exhibition_image_container">
                                <label for="video_link" class="col-md-4 col-form-label text-md-right">{{ __('Link videa:') }}</label>

                                <div class="col-md-6">
                                    <input id="video_link" type="text" class="form-control" name="video_link" required >
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Video</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')