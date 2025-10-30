@extends('layouts.app')
@section('title','Trashed Posts')
@section('content')
<h1 class="h4 mb-3">Trashed Posts</h1>
@if($posts->count())
  <ul class="list-group">
    @foreach($posts as $post)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <span>{{ $post->title }}</span>
        <form method="POST" action="{{ route('posts.restore', $post->id) }}">
          @csrf
          <button class="btn btn-sm btn-outline-success">Restore</button>
        </form>
      </li>
    @endforeach
  </ul>
  <div class="mt-3">{{ $posts->links() }}</div>
@else
  <p>No trashed posts.</p>
@endif
@endsection
