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
                <div class="exibition-boxes" id="exibition-boxes-container">
                    @foreach ($excibitionElements as $excibitionElement)
                    <a class="card-link exibition-box shadow" onclick="getExhibitionData({{$excibitionElement->id}})">
                        <div class="card-body">
                            <div class="exibition-inner">
                                <img src="/storage/exhibition_data/{{$excibitionElement->excibition_image}}" style="width: 100%; height:100%">
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exhibitionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
