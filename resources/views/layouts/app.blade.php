{{-- <!DOCTYPE html>
<html>
<head>
    <title>My Site - @yield('title')</title>
</head>
<body>


     @include('navbar')


    <main>
        @yield('content')
    </main>




@include('footer')

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    @include('navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('footer')

    

</body>
</html>

