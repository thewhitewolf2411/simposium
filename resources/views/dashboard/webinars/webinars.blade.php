@extends('layouts.app')

@section('content')
<div class="container">
    <div class="back-button-container" id="back-webinar" title="Dashboard">
        <a href="/simpozij/dashboard">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Webinari') }}</div>

                <div class="card-body webinar-link">
                    <div class="row">
                        <div class="col-3">{{ __('Ime webinara') }}</div>
                        <div class="col-3">{{ __('Datum održavanja webinara') }}</div>
                        <div class="col-3">{{ __('Vrijeme održavanja webinara') }}</div>
                        <div class="col-3">{{ __('Trajanje webinara') }}</div>
                    </div>
                </div>

                <div class="card-header"><a class="webinar-day-active" href="javascript:void(0)" onclick="changeWebinarDay(1)" id="linkday1"> {{ __('Dan 1') }} </a> <a class="webinar-day-disabled" href="javascript:void(0)" onclick="changeWebinarDay(2)" id="linkday2"> {{ __('Dan 2') }} </a> <a class="webinar-day-disabled" href="javascript:void(0)" onclick="changeWebinarDay(3)" id="linkday3"> {{ __('Dan 3') }} </a> </div>


                @foreach($webinars as $webinar)
                    @if($webinar->webinar_date === '2020-12-04')
                        <a href="/simpozij/webinars/{{$webinar->id}}" class="webinar-link webinar-link-active day1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">{{ $webinar->webinar_name }}</div>
                                    <div class="col-3">{{ __('Petak') }}<br>{{ \Carbon\Carbon::parse($webinar->webinar_date)->format('d/m/Y') }}</div>
                                    <div class="col-3">{{ $webinar->webinar_time }}h</div>
                                    <div class="col-3">{{ $webinar->webinar_duration }}h</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
                @foreach($webinars as $webinar)
                    @if($webinar->webinar_date === '2020-12-05')
                        <a href="/simpozij/webinars/{{$webinar->id}}" class="webinar-link webinar-link-disabled day2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">{{ $webinar->webinar_name }}</div>
                                    <div class="col-3">{{ __('Subota') }}<br>{{ \Carbon\Carbon::parse($webinar->webinar_date)->format('d/m/Y') }}</div>
                                    <div class="col-3">{{ $webinar->webinar_time }}h</div>
                                    <div class="col-3">{{ $webinar->webinar_duration }}h</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
                @foreach($webinars as $webinar)
                    @if($webinar->webinar_date === '2020-12-06')
                        <a href="/simpozij/webinars/{{$webinar->id}}" class="webinar-link webinar-link-disabled day3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">{{ $webinar->webinar_name }}</div>
                                    <div class="col-3">{{ __('Nedjelja') }}<br>{{ \Carbon\Carbon::parse($webinar->webinar_date)->format('d-m-Y') }}</div>
                                    <div class="col-3">{{ $webinar->webinar_time }}h</div>
                                    <div class="col-3">{{ $webinar->webinar_duration }}h</div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach

            </div>

        </div>
    </div>
</div>

<script>

    function changeWebinarDay(day){
        
        if(day == 1){
            if(document.getElementById('linkday1').classList.contains('webinar-day-active')){
                //do nothing
            }
            else{
                var activeElement = document.getElementsByClassName('webinar-day-active')[0];
                activeElement.classList.remove('webinar-day-active');
                activeElement.classList.add('webinar-day-disabled');

                var newActiveElement = document.getElementById('linkday1');
                newActiveElement.classList.add('webinar-day-active');
                newActiveElement.classList.remove('webinar-day-disabled');

                var activeWebinars = document.getElementsByClassName('day2');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }
                var activeWebinars = document.getElementsByClassName('day3');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }

                var newActiveWebinar = document.getElementsByClassName('day1');
                for(var i=0; i<newActiveWebinar.length; i++){
                    newActiveWebinar[i].classList.add('webinar-link-active');
                    newActiveWebinar[i].classList.remove('webinar-link-disabled');
                }


            }
        }
        else if(day == 2){
            if(document.getElementById('linkday2').classList.contains('webinar-day-active')){
                //do nothing
            }
            else{
                var activeElement = document.getElementsByClassName('webinar-day-active')[0];
                activeElement.classList.remove('webinar-day-active');
                activeElement.classList.add('webinar-day-disabled');

                var newActiveElement = document.getElementById('linkday2');
                newActiveElement.classList.add('webinar-day-active');
                newActiveElement.classList.remove('webinar-day-disabled');

                var activeWebinars = document.getElementsByClassName('day1');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }
                var activeWebinars = document.getElementsByClassName('day3');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }


                var newActiveWebinar = document.getElementsByClassName('day2');
                for(var i=0; i<newActiveWebinar.length; i++){
                    newActiveWebinar[i].classList.add('webinar-link-active');
                    newActiveWebinar[i].classList.remove('webinar-link-disabled');
                }
            }
        }
        else if(day == 3){
            if(document.getElementById('linkday3').classList.contains('webinar-day-active')){
                //do nothing
            }
            else{
                var activeElement = document.getElementsByClassName('webinar-day-active')[0];
                activeElement.classList.remove('webinar-day-active');
                activeElement.classList.add('webinar-day-disabled');

                var newActiveElement = document.getElementById('linkday3');
                newActiveElement.classList.add('webinar-day-active');
                newActiveElement.classList.remove('webinar-day-disabled');

                var activeWebinars = document.getElementsByClassName('day1');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }
                var activeWebinars = document.getElementsByClassName('day2');
                for(var i=0; i<activeWebinars.length; i++){
                    activeWebinars[i].classList.remove('webinar-link-active');
                    activeWebinars[i].classList.add('webinar-link-disabled');
                }

                var newActiveWebinar = document.getElementsByClassName('day3');
                for(var i=0; i<newActiveWebinar.length; i++){
                    newActiveWebinar[i].classList.add('webinar-link-active');
                    newActiveWebinar[i].classList.remove('webinar-link-disabled');
                }
            }
        }

    }

</script>
@endsection
