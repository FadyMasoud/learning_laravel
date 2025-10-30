

{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">MySite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        <li><a class="btn btn-success" href="/register">Register</a></li>
        <li><a class="btn btn-success" href="/login">Login</a></li>
      </ul>
    </div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/home') }}">MySite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
      {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('posts.trashed') }}">Trash</a></li> --}}

        @guest
          <li class="nav-item">
            <a class="btn btn-success" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
          </li>
        @endguest

        @auth
          <li class="nav-item">
            <span class="navbar-text text-white me-2">
              Hi, {{ auth()->user()->name }}
            </span>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

