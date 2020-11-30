@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dodaj novi štand') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addSponsor') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="booth" class="col-md-4 col-form-label text-md-right">{{ __('Štand sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="booth" type="file" class="form-control" name="booth" value="{{ old('booth') }}" required autocomplete="booth" accept=".zip,.rar,.7zip" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Kontakt email sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-success" name="submit" value="Dodaj Sponzora">Dodaj Štand</button>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')