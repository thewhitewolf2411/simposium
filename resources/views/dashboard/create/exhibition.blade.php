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
                <div class="card-header">{{ __('Dodaj Izložbu')  }}</div>

                    <div class="card-body" id="edit_events_container">
                        <form method="POST" action="{{ route('addExhibition') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row">
                                <label for="exhibition_name" class="col-md-4 col-form-label text-md-right">{{ __('Ime izložbe:') }}</label>

                                <div class="col-md-6">
                                    <input id="exhibition_name" type="text" class="form-control" name="exhibition_name" required >
                                </div>
                            </div>

                            <div class="form-group row" id="exhibition_image_container">
                                <label for="exhibition_image" class="col-md-4 col-form-label text-md-right">{{ __('Preview izložbe:') }}</label>

                                <div class="col-md-6">
                                    <input id="exhibition_image" type="file" class="form-control" name="exhibition_image" required >
                                </div>
                            </div>

                            <div class="form-group row" id="exhibition_image_container">
                                <label for="exhibition_file" class="col-md-4 col-form-label text-md-right">{{ __('Fajl izložbe:') }}</label>

                                <div class="col-md-6">
                                    <input id="exhibition_file" type="file" class="form-control" name="exhibition_file" required >
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Izložbu</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')