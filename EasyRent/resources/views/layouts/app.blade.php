<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyRent</title>
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @if(Route::currentRouteName() === 'contact')
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @endif

    @if(Route::currentRouteName() === 'about')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    @endif

    @if(Route::currentRouteName() === 'rooms.booking')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    @endif
    
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('rooms.show') }}" class="navbar-brand">EasyRent</a>
        <ul>
             <li><a href="{{ route('rooms.show') }}">Home</a></li>
             <li><a href="{{ route('contact') }}">Contact Us</a></li>
             <li><a href="{{ route('about') }}">About Us</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>



<!-- app.blade.php: Main layout template that includes the navbar and applies general styles. -->