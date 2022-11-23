<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Relationships</title>
</head>
<body>
    <h1>@yield('title')</h1>
    <nav>
        <ul>
            <li><a href="{{ route('insert-user') }}">Insert user</a></li>
            <li><a href="{{ route('insert-direction') }}">Insert direction</a></li>
            <li><a href="{{ route('assign-direction') }}">Assign direction</a></li>
        </ul>
    </nav>
    <br>
    @section('content')
    @show
</body>
</html>