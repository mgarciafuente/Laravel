<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous</title>
</head>
<body>
    <h1>Anonymous</h1>
    <h2>Variables:</h2>
    <ul>
    @foreach ($variableArray as $valor)
        <li>{{$valor}}</li>
    @endforeach
    </ul>
    <ul>
    <?php for($i=0; $i<count($variableArray); $i++) {
            $style = $i%2==0 ? "style='background-color:lightgreen;'" : "" ;
            echo "<li $style>" . $variableArray[$i] . "</li>";
        }
    ?>
    </ul>
    <ul>
    @foreach ($variableArray as $valor)
        @if ($loop->first)
            This is the first iteration.
        @endif

        @if($loop->index%2==0)
            <li style='background-color:lightgreen;'>{{$valor}}</li>
        @else
            <li>{{$valor}}</li>
        @endif

        @if ($loop->last)
            This is the last iteration.
        @endif
    @endforeach
    </ul>
</body>
</html>