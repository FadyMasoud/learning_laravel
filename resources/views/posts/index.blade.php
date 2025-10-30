@extends('layouts.app')
@section('title','Posts')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3">Posts</h1>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
  <a href="{{ route('posts.trashed') }}" class="btn btn-danger">Trashed</a>
</div>
@if($posts->count())
  <div class="list-group">
    @foreach($posts as $post)
      <a href="{{ route('posts.show', $post) }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{ $post->title }}</h5>
          <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        <p class="mb-1 text-muted">{{ Str::limit($post->body, 120) }}</p>
        <small>Status: <span class="badge bg-secondary">{{ $post->status }}</span></small>
      </a>
    @endforeach
  </div>
  <div class="mt-3">{{ $posts->links() }}</div>
@else
  <p>No posts yet.</p>
@endif
@endsection
