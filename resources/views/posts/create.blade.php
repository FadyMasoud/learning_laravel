@extends('layouts.app')
@section('title','Create Post')
@section('content')
<h1 class="h4 mb-3">Create Post</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
    </ul>
  </div>
@endif
<form method="POST" action="{{ route('posts.store') }}">
  @include('posts._form')
  <button class="btn btn-primary">Save</button>
  <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
