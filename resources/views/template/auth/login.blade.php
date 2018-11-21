@extends('template.layout.auth')

@section('page-content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Masukkan akun login</p>

            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" 
                    class="form-control" 
                    placeholder="Username / Email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" 
                    class="form-control" 
                    placeholder="Password"
                    name="password" 
                    id="password" 
                    required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection