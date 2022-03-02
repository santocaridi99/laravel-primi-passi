<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
   <div class="navbar">
     <h1>Hello laravel</h1>
     <ul>
        @foreach ($data as $value)
        {{-- stampo link e testo del data --}}
        {{-- con route mi cambia "rotta" dinamicamente con il cakore che passo nei link dell'array --}}
        <li><a href="{{route($value["link"])}}">{{$value["text"]}}</a></li>
        @endforeach
     </ul>
    </div>
</body>
</html>