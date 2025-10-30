@extends('layouts.app')
@section('title', $post->title)
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h4 mb-0">{{ $post->title }}</h1>
  <div>
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
    <form class="d-inline" method="POST" action="{{ route('posts.destroy', $post) }}" onsubmit="return confirm('Delete this post?')">
      @csrf @method('DELETE')
      <button class="btn btn-sm btn-outline-danger">Delete</button>
    </form>
  </div>
</div>
<p class="text-muted">Status: <span class="badge bg-secondary">{{ $post->status }}</span></p>
<p>{{ $post->body }}</p>

<hr>
<h5>Comments</h5>
@if($post->comments->count())
  <ul class="list-group mb-3">
    @foreach($post->comments as $c)
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">User #{{ $c->user->name }}</div>
          {{ $c->body }}
        </div>
        <form class="ms-2" method="POST" action="{{ route('comments.destroy', $c) }}" onsubmit="return confirm('Delete comment?')">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
      </li>
    @endforeach
  </ul>
@else
  <p class="text-muted">No comments yet.</p>
@endif

<h6 class="mt-3">Add a Comment</h6>
<form method="POST" action="{{ route('posts.comments.store', $post) }}">
  @csrf
  <div class="row g-2">
    {{-- <div class="col-md-2">
      <input type="number" name="user_id" class="form-control" placeholder="User ID" required>
    </div> --}}
    <div class="col-md-8">
      <input type="text" name="body" class="form-control" placeholder="Comment..." required>
    </div>
    <div class="col-md-2 d-grid">
      <button class="btn btn-primary">Add</button>
    </div>
  </div>
</form>
@endsection
