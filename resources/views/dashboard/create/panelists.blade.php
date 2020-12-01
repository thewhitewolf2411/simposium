@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                @if(Session::has('success'))
                    <div class="alert alert-success my-0 p-3" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="alert alert-danger my-0 p-3" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif


                <div class="card-header">{{ __('Dodaj panelista') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addPanelist') }}">

                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titula:') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                                    <select id="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                                        <option>Selektuj opciju</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('Vrijeme webinara:') }}</label>

                                <div class="col-md-6">
                                    <input id="time" type="time" class="form-control" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Trajanje webinara:') }}</label>

                                <div class="col-md-6">
                                    <input id="duration" type="time" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required autocomplete="duration" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime webinara:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link webinara: ') }}</label>

                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" autocomplete="link" autofocus>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Webinar</button>

                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
