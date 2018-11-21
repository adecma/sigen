@extends('template.layout.auth')

@section('page-content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Halaman Tidak Ditemukan</p>

            <div class="text-center">
                <h1>404</h1>
            </div>
        </div>
    </div>
@endsection