<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<title>{{ config('app.name') }}</title>

<link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/adminlte/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/adminlte/css/skin-green.min.css') }}">

<!--[if lt IE 9]>
<script src="{{ asset('vendors/html5shiv/html5shiv.min.js') }}"></script>
<script src="{{ asset('vendors/respond/respond.min.js') }}"></script>
<![endif]-->

@stack('add_css')

<style>
    @stack('add_style')
</style>