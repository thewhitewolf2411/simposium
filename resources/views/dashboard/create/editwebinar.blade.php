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
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="first_event" class="col-md-4 col-form-label">{{ __('Prvi event tip:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="first_event" type="text" class="form-control" name="first_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="first_event_optional_1" type="text" class="form-control" name="first_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="first_event_optional_2" type="text" class="form-control" name="first_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="first_event_optional_3" type="text" class="form-control" name="first_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="first_event_optional_4" type="text" class="form-control" name="first_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="first_event_input" class="col-md-4 col-form-label ">{{ __('Prvi event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="first_event_input_container">
                                        <input id="first_event_input" type="file" class="form-control" name="first_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="first_event_optional_1_input_container">
                                        <input id="first_event_input_optional_1" type="file" class="form-control" name="first_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="first_event_optional_2_input_container">
                                        <input id="first_event_input_optional_2" type="file" class="form-control" name="first_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="first_event_optional_3_input_container">
                                        <input id="first_event_input_optional_3" type="file" class="form-control" name="first_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="first_event_optional_4_input_container">
                                        <input id="first_event_input_optional_4" type="file" class="form-control" name="first_event_input_optional_4" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="second_event" class="col-md-4 col-form-label ">{{ __('Second event type:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="second_event" type="text" class="form-control" name="second_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="second_event_optional_1" type="text" class="form-control" name="second_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="second_event_optional_2" type="text" class="form-control" name="second_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="second_event_optional_3" type="text" class="form-control" name="second_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="second_event_optional_4" type="text" class="form-control" name="second_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="second_event_input" class="col-md-4 col-form-label ">{{ __('Second event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="second_event_input_container">
                                        <input id="second_event_input" type="file" class="form-control" name="second_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="second_event_optional_1_input_container">
                                        <input id="second_event_input_optional_1" type="file" class="form-control" name="second_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="second_event_optional_2_input_container">
                                        <input id="second_event_input_optional_2" type="file" class="form-control" name="second_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="second_event_optional_3_input_container">
                                        <input id="second_event_input_optional_3" type="file" class="form-control" name="second_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="second_event_optional_4_input_container">
                                        <input id="second_event_input_optional_4" type="file" class="form-control" name="second_event_input_optional_4" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="third_event" class="col-md-4 col-form-label ">{{ __('Third event type:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="third_event" type="text" class="form-control" name="third_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="third_event_optional_1" type="text" class="form-control" name="third_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="third_event_optional_2" type="text" class="form-control" name="third_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="third_event_optional_3" type="text" class="form-control" name="third_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="third_event_optional_4" type="text" class="form-control" name="third_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="third_event_input" class="col-md-4 col-form-label ">{{ __('Thrid event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="third_event_input_container">
                                        <input id="third_event_input" type="file" class="form-control" name="third_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="third_event_optional_1_input_container">
                                        <input id="third_event_input_optional_1" type="file" class="form-control" name="third_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="third_event_optional_2_input_container">
                                        <input id="third_event_input_optional_2" type="file" class="form-control" name="third_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="third_event_optional_3_input_container">
                                        <input id="third_event_input_optional_3" type="file" class="form-control" name="third_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="third_event_optional_4_input_container">
                                        <input id="third_event_input_optional_4" type="file" class="form-control" name="third_event_input_optional_4" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fourth_event" class="col-md-4 col-form-label ">{{ __('Fourth event tip:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="fourth_event" type="text" class="form-control" name="fourth_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fourth_event_optional_1" type="text" class="form-control" name="fourth_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fourth_event_optional_2" type="text" class="form-control" name="fourth_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fourth_event_optional_3" type="text" class="form-control" name="fourth_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fourth_event_optional_4" type="text" class="form-control" name="fourth_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="fourth_event_input" class="col-md-4 col-form-label ">{{ __('Fourth event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="fourth_event_input_container">
                                        <input id="fourth_event_input" type="file" class="form-control" name="fourth_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fourth_event_optional_1_input_container">
                                        <input id="fourth_event_input_optional_1" type="file" class="form-control" name="fourth_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fourth_event_optional_2_input_container">
                                        <input id="fourth_event_input_optional_2" type="file" class="form-control" name="fourth_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fourth_event_optional_3_input_container">
                                        <input id="fourth_event_input_optional_3" type="file" class="form-control" name="fourth_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fourth_event_optional_4_input_container">
                                        <input id="fourth_event_input_optional_4" type="file" class="form-control" name="fourth_event_input_optional_4" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="first_event" class="col-md-4 col-form-label ">{{ __('Fifth event type:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="fifth_event" type="text" class="form-control" name="fifth_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fifth_event_optional_1" type="text" class="form-control" name="fifth_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fifth_event_optional_2" type="text" class="form-control" name="fifth_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fifth_event_optional_3" type="text" class="form-control" name="fifth_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="fifth_event_optional_4" type="text" class="form-control" name="fifth_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="fifth_event_input" class="col-md-4 col-form-label ">{{ __('Fifth event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="fifth_event_input_container">
                                        <input id="fifth_event_input" type="file" class="form-control" name="fifth_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fifth_event_optional_1_input_container">
                                        <input id="fifth_event_input_optional_1" type="file" class="form-control" name="fifth_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fifth_event_optional_2_input_container">
                                        <input id="fifth_event_input_optional_2" type="file" class="form-control" name="fifth_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fifth_event_optional_3_input_container">
                                        <input id="fifth_event_input_optional_3" type="file" class="form-control" name="fifth_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="fifth_event_optional_4_input_container">
                                        <input id="fifth_event_input_optional_4" type="file" class="form-control" name="fifth_event_input_optional_4" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="sixth_event" class="col-md-4 col-form-label ">{{ __('Sixth event type:') }}</label>
    
                                    <div class="col-md-12">
                                        <select id="sixth_event" type="text" class="form-control" name="sixth_event" value="{{ old('first_event') }}" required>
                                            <option selected disabled>Select option</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="sixth_event_optional_1" type="text" class="form-control" name="sixth_event_optional_1" value="{{ old('first_event') }}" >
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="sixth_event_optional_2" type="text" class="form-control" name="sixth_event_optional_2" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="sixth_event_optional_3" type="text" class="form-control" name="sixth_event_optional_3" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                    <div class="col-md-12">
                                        <select id="sixth_event_optional_4" type="text" class="form-control" name="sixth_event_optional_4" value="{{ old('first_event') }}">
                                            <option selected disabled>Add more events: (optional)</option>
                                            <option value="1">Video</option>
                                            <option value="2">PDF</option>
                                            <option value="3">Image</option>
                                            <option value="4">PPT</option>
                                            <option value="5">URL</option>
                                        </select>
    
                                    </div>
    
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label for="sixth_event_input" class="col-md-4 col-form-label ">{{ __('Sixth event file:') }}</label>
    
                                    <div class="col-md-12 event_input_container fade" id="sixth_event_input_container">
                                        <input id="sixth_event_input" type="file" class="form-control" name="sixth_event_input" required >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="sixth_event_optional_1_input_container">
                                        <input id="sixth_event_input_optional_1" type="file" class="form-control" name="sixth_event_input_optional_1" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="sixth_event_optional_2_input_container">
                                        <input id="sixth_event_input_optional_2" type="file" class="form-control" name="sixth_event_input_optional_2" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="sixth_event_optional_3_input_container">
                                        <input id="sixth_event_input_optional_3" type="file" class="form-control" name="sixth_event_input_optional_3" >
                                    </div>
    
                                    <div class="col-md-12 event_input_container fade" id="sixth_event_optional_4_input_container">
                                        <input id="sixth_event_input_optional_4" type="file" class="form-control" name="sixth_event_input_optional_4" >
                                    </div>
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