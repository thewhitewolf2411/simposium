@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite svoju Email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Novi verifikacijski link je ponovno poslan na Vašu email adresu.') }}
                        </div>
                    @endif

                    <label>{{ __('Prije slijedećeg koraka, molimo Vas da provjerite Vaš mail za verifikacijski link.') }}</label>
                    <label>{{ __('Ako niste dobili mail') }},</label>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknite ovdje za ponovno slanje') }}</button>.
                    </form>
                    <br>
                    <label>ili nas kontaktirajte putem telefona +387 (0) 33 863 666 ili na e-mail adresu: info@purplekey.ba</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
