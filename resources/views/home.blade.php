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
        @foreach ($navbar as $value)
        {{-- stampo link e testo del data --}}
        <li><a href="{{$value["link"]}}">{{$value["text"]}}</a></li>
        @endforeach
     </ul>
    </div>
</body>
</html>