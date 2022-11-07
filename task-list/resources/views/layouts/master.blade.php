<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('includes/header')          
    </header>
    <div class="main">
        @yield('content')
    </div>
    <footer>
        @include('includes/footer') 
    </footer> 
</body>
</html>