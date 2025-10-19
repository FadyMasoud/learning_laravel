@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center mb-4">Welcome to My Laravel Website Home Page</h1>

    <div class="row">

        
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">This is a simple card example using Bootstrap.</p>
                    <a href="#" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div>
        

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Bootstrap makes it easy to build beautiful layouts.</p>
                    <a href="#" class="btn btn-success">Read more</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Cards are flexible content containers.</p>
                    <a href="#" class="btn btn-danger">Explore</a>
                </div>
            </div>
        </div>
    </div>
@endsection
