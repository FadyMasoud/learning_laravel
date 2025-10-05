
<?php 
$name = 'fady';

?>


@extends('layouts.app')

@section('title', 'About')

{{-- @section('content')
    <h1>About ME - {{ $name }}</h1>
    <p>This is a small demo website.</p>
     <a href="{{ route('profile') }}">Profile</a>
@endsection --}}

@section('content')
    <h1 class="text-center mb-4">About Me - {{ $name }}</h1>
    <div class="row">
        <div class="col-md-12">
            <p class="lead">We are building a demo Laravel project with Blade and Bootstrap.</p>
        </div>
        <div class="col-md-12">
            <div class="alert alert-info">
                <strong>Did you know?</strong> Laravel uses the MVC pattern to separate logic and views.
            </div>
        </div>
    </div>
@endsection


