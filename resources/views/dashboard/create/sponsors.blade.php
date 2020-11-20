@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dodaj novog sponzora') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addSponsor') }}">

                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="logo" type="file" class="form-control" name="logo" value="{{ old('logo') }}" required autocomplete="logo" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Kontakt email sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Nivo sponzora:') }}</label>

                                <div class="col-md-6">
                                    <select id="level" class="form-control" name="level" required>
                                        <option value="" selected disabled>Odaberite nivo sponzora:</option>
                                        <option value="1">Platinum</option>
                                        <option value="2">Zlatni</option>
                                        <option value="3">Srebreni</option>
                                        <option value="4">Ostali</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="booth" class="col-md-4 col-form-label text-md-right">{{ __('Da li sponzor ima pravo na štand: ') }}</label>

                                <div class="col-md-6">
                                    <select id="booth" class="form-control" name="booth" required>
                                        <option value="" selected disabled></option>
                                        <option value="true">Da</option>
                                        <option value="false">Ne</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Sponzora</button>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')