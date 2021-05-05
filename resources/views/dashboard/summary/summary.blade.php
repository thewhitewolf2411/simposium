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
    <div class="row w-100 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sažetci') }}</div>
                <div class="exibition-boxes" id="exibition-boxes-container">
                    @foreach ($summaryElements as $summaryElement)
                    <a class="card-link shadow w-100 summary-click" onclick="getSummaryData({{$summaryElement->id}})">
                        <div class="card-body col-md-12">
                            {{$summaryElement->summary_name}}
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="summaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
