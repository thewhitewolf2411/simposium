@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Booth') ." ". $canvas->canvas_name }}</div>

                    <img src="/storage/input_image/{{$canvas->image_path}}">

                    <div class="card-body" id="edit_events_container">
                        <form method="POST" action="{{ route('editSponsor') }}" enctype="multipart/form-data">

                            <input type="hidden" name="canvas_type" id="canvas_type" value="{{$canvas->booth_type}}">
                            <input type="hidden" name="canvas_id" id="canvas_id" value="{{$canvas->id}}">

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

                            <div class="form-group row">
                                <label for="second_event" class="col-md-4 col-form-label text-md-right">{{ __('Drugi event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="second_event" type="text" class="form-control" name="second_event" value="{{ old('second_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="second_event_input_container">
                                <label for="second_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Drugi event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="second_event_input" type="file" class="form-control" name="second_event_input" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="third_event" class="col-md-4 col-form-label text-md-right">{{ __('Treći event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="third_event" type="text" class="form-control" name="third_event" value="{{ old('third_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="third_event_input_container">
                                <label for="third_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Treći event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="third_event_input" type="file" class="form-control" name="third_event_input" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fourth_event" class="col-md-4 col-form-label text-md-right">{{ __('Četvrti event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="fourth_event" type="text" class="form-control" name="fourth_event" value="{{ old('fourth_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="fourth_event_input_container">
                                <label for="fourth_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Četvrti event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="fourth_event_input" type="file" class="form-control" name="fourth_event_input" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fifth_event" class="col-md-4 col-form-label text-md-right">{{ __('Peti event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="fifth_event" type="text" class="form-control" name="fifth_event" value="{{ old('fifth_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="fifth_event_input_container">
                                <label for="fifth_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Peti event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="fifth_event_input" type="file" class="form-control" name="fifth_event_input" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sixth_event" class="col-md-4 col-form-label text-md-right">{{ __('Šesti event tip:') }}</label>

                                <div class="col-md-6">
                                    <select id="sixth_event" type="text" class="form-control" name="sixth_event" value="{{ old('sixth_event') }}" required>
                                        <option selected disabled>Select option</option>
                                        <option value="1">Video</option>
                                        <option value="2">PDF</option>
                                        <option value="3">Image</option>
                                        <option value="4">PPT</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row event_input_container fade" id="sixth_event_input_container">
                                <label for="sixth_event_input" class="col-md-4 col-form-label text-md-right">{{ __('Šesti event file:') }}</label>

                                <div class="col-md-6">
                                    <input id="sixth_event_input" type="file" class="form-control" name="sixth_event_input" required >
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