@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="back-button-container" id="back-webinar" title="Dashboard">
        <a href="/simpozij/dashboard">
            <div class="my-3">
                <img src="{{url('/images/body/back.svg')}}">
            </div>
        </a>
    </div>
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Agenda') }}</div>

                @include('dashboard.webinars.agenda')

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
