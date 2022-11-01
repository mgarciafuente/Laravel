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
                <form name="login" action="{{ route('main') }}" method="post">
                    @csrf
                    <input type="number" name="age" placeholder="Age" value="{{ old('age') }}" @if ($errors->has('age')) class="error" @endif>
                    <input type="hidden" name="name" value="{{ $name }}">
                    <input type="hidden" name="lastname" value="{{ $lastname }}">
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
