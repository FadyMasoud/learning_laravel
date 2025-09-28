
<?php 
$name = 'Sally';

?>

<h1>About Me - {{ $name }}</h1>
<p>This is my first Laravel page!</p>
{{-- // Usage in Blade --}}
<a href="{{ route('profile') }}">Profile</a>