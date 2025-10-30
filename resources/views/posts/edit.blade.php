@extends('layouts.app')
@section('title','Edit Post')
@section('content')
<h1 class="h4 mb-3">Edit Post</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
    </ul>
  </div>
@endif
<form method="POST" action="{{ route('posts.update', $post) }}">
  @method('PUT')
  @include('posts._form')
  <button class="btn btn-primary">Update</button>
  <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
