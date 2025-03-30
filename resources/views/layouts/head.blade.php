<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/data.css")}}">
</head>
<body>
    <button onclick="document.getElementById('background-music').play()">Играть музыку</button>

    <audio id="background-music" autoplay loop>
        <source src="{{asset('audio/1.mp3')}}" type="audio/mp3">
        Ваш браузер не поддерживает элемент audio.
    </audio>
    
      
    @yield('main')
</body>
</html>