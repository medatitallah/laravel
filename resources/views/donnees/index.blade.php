<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
</head>
<body>
    <h1>index</h1>
<h2>welcome</h2>
<h3>{{$name}}</h3>
<h3>{{$age}}</h3>
@foreach($names as $name)
    <div>
        {{$name}}
        </hr>
    </div>    


@endforeach

</body>
</html>