@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite svoju Email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Novi verifikacijski link je ponovno poslan na Vašu email adresu.') }}
                        </div>
                    @endif

                    <label>{{ __('Prije slijedećeg koraka, molimo Vas da provijerite Vaš mail za verifikacijski link.') }}</label>
                    <label>{{ __('Ako niste dobili mail') }},</label>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknite ovdje za ponovno slanje') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
