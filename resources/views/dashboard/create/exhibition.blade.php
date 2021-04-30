@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add exhibiion')  }}</div>

                    <div class="card-body" id="edit_events_container">
                        <form method="POST" action="{{ route('addExhibition') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row">
                                <label for="first_event" class="col-md-4 col-form-label text-md-right">{{ __('Prvi event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="first_event" type="text" class="form-control" name="first_event" value="{{ old('first_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="first_event_input_container">
                                <label for="first_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Prvi event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="first_event_input" type="file" class="form-control" name="first_event_input" required >
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