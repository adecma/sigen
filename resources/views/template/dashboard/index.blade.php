@extends('template.layout.root')

@section('page-header')
    <h1>
        Dashboard
        <small>Halaman utama</small>    
    </h1>    
@endsection

@section('page-content')
    <div class="box">
        <div class="box-body">
            Selamat datang {{ Auth::user()->name }}
        </div>
    </div>
@endsection