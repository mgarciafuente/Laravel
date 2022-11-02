<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel | Controllers exercise</title>
        @include('includes.headContent')
    </head>
    <body>
        @include('includes.header')
        <div class="main">
            <div class="cont2">
                <h2>Hello {{ $name }} {{ $lastname }}</h2>
                <p>Your age is {{ $age }}!</p>
                <a href="{{ route('home') }}" class="button">Back</a>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
