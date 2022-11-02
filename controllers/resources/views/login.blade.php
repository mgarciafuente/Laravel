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
                <form name="login" action="{{ route('form.age') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" @if ($errors->has('name')) class="error" @endif>
                    <input type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}" @if ($errors->has('lastname')) class="error" @endif>
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>
