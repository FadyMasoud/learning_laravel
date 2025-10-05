@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <h1 class="mb-4">Contact Us</h1>

    {{-- Success alert --}}
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    {{-- Validation errors --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>There were some problems with your submission:</strong>
        <ul class="mb-0 mt-2">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" novalidate>
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Name*</label>
        <input type="text" name="name" id="name"
               value="{{ old('name') }}"
               class="form-control @error('name') is-invalid @enderror"
               placeholder="Your full name" required>
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email*</label>
        <input type="email" name="email" id="email"
               value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="you@example.com" required>
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message*</label>
        <textarea name="message" id="message" rows="5"
                  class="form-control @error('message') is-invalid @enderror"
                  placeholder="How can we help?" required>{{ old('message') }}</textarea>
        @error('message')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">
        Send Message
      </button>
    </form>
  </div>
</div>
@endsection
