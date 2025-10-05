@extends('layouts.app')

@section('title', 'User Registration')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-success text-white text-center">
                <h4>User Registration</h4>
            </div>

            <div class="card-body p-4">
                <form action="/user/register" method="post">
                    @csrf  {{-- Laravel CSRF token protection --}}

                    <div class="mb-3">
                        <label class="form-label fw-bold">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Choose a username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center text-muted">
                <small>Already have an account? <a href="#">Login here</a></small>
            </div>
        </div>

    </div>
</div>
@endsection
