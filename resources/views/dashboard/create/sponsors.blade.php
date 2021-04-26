@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add new Booth') }}</div>

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
                                <label for="input_image" class="col-md-4 col-form-label text-md-right">{{ __('Štand sponzora:') }}</label>

                                <div class="col-md-6">
                                    <input id="input_image" type="file" class="form-control" name="input_image" value="{{ old('booth') }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="booth_type" class="col-md-4 col-form-label text-md-right">{{ __('Tip štanda:') }}</label>

                                <div class="col-md-6">
                                    <select id="booth_type" type="file" class="form-control" name="booth_type" value="{{ old('booth_type') }}" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
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