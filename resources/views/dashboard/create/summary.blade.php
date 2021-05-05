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
                        <form method="POST" action="{{ route('addSummary') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row">
                                <label for="summary_name" class="col-md-4 col-form-label text-md-right">{{ __('Naziv sažetka:') }}</label>

                                <div class="col-md-6">
                                    <input id="summary_name" type="text" class="form-control" name="summary_name" required >
                                </div>
                            </div>

                            <div class="form-group row" id="exhibition_image_container">
                                <label for="summary_file" class="col-md-4 col-form-label text-md-right">{{ __('Fajl sažetka:') }}</label>

                                <div class="col-md-6">
                                    <input id="summary_file" type="file" class="form-control" name="summary_file" required >
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Sažetak</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')