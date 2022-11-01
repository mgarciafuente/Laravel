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
                <a href="{{ route('form.login') }}" class="button">Login</a>
                <a href="{{ route('form.age') }}" class="button">Insert age without login</a>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
