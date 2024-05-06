<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>

@foreach($data as $data)
        {{$data->poster_link}}
        <br></br>
        <img src={{$data->poster_link}}>
@endforeach
</body>
</html>