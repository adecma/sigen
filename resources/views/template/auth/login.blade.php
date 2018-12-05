@extends('template.layout.auth')

@push('add_style')
    body {
        background: url({{ asset('images/background.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;
    }

    .login-logo a,
    .register-logo a {
        color: #f4f4f4;
        font-size: 50px;
    }

    h3 {
        color: #f4f4f4;
    }
@endpush

@section('page-content')
    <div  style="padding-top: 10%;"></div>
    <div class="row">
        <div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3 col-xs-8 col-xs-push-2">
            <div class="box">
                <div class="box-header text-center">
                    <h2 class="text-success">
                        {{ config('app.name') }}
                    </h2>
                    <span>Sistem Informasi Generus Banjarbaru</span>
                    <hr>
                </div>
        
                <div class="box-body">
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
                                <button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection