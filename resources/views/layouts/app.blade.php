<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>41st Battalion</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/data.css')}}">

    <link rel="preload" href="{{ asset('images/backframe3.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back2.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back4.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back7.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/final.jpg') }}" as="image">
    <link rel="preload" href="{{ asset('images/back6.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back8.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back9.png') }}" as="image">
    <link rel="preload" href="{{ asset('images/back10.png') }}" as="image">


</head>
<body>
    <div class="header">
        <div class="home">
            <a href="/">
                <img src="{{asset("images/home.svg")}}" alt="">
            </a>
            @auth
            <p class="auth_name">{{Auth::user()->fullname}} <br><span style="border-top:1px solid rgb(255, 255, 255);"> {{Auth::user()->rank}}<span></p>
            @endauth
        </div>
        <div class="audio_btns">
            <button onclick="playMusic()">Играть музыку</button>
            <button onclick="stopMusic()">Остановить музыку</button>
        </div>
    </div>

    
    <audio id="background-music" loop>
        <source src="{{asset('audio/1.mp3')}}" type="audio/mp3">
        Ваш браузер не поддерживает элемент audio.
    </audio>

    @yield('main')

    <script>
        function playMusic() {
            const music = document.getElementById('background-music');
            music.play();
            localStorage.setItem('musicPlaying', 'true'); 
            document.getElementById('music-status').textContent = 'Музыка воспроизводится'; 
        }

        function stopMusic() {
            const music = document.getElementById('background-music');
            music.pause(); 
            music.currentTime = 0; 
            localStorage.setItem('musicPlaying', 'false'); 
            document.getElementById('music-status').textContent = 'Музыка не воспроизводится';с
        }

        window.onload = function() {
            const musicState = localStorage.getItem('musicPlaying');
            const music = document.getElementById('background-music');

            if (musicState === 'true') {
                music.play(); 
                document.getElementById('music-status').textContent = 'Музыка воспроизводится'; 
            }
        }
    </script>
</body>
</html>
