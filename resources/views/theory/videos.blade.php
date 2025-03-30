@extends('layouts.app')

@section('main')
<div class="theoryvideos">
    <div class="container">
        <div class="main_title">
            <p>
                видеоинструктажи
            </p>
        </div>

        <div>
            <input type="text" class="file_input" id="searchInput" placeholder="Поиск по тегам..." onkeyup="filterVideos()">
        </div>

        <div class="theory_videos">
            <div class="theory_video" data-tags="оружие, безопасность, хват">
                <p class="tag">#Оружие / #Безопасность / #Хват</p>
                <p class="title">
                    Как точно стрелять из пистолета, используя правильный хват и стойку.
                </p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Kvp-1YHKAK0?si=25KRZTZqQOdwiZG9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>


            <div class="theory_video" data-tags="работа, служба, собр">
                <p class="tag">#Работа / #Служба / #СОБР</p>
                <p class="title">
                    Служба в СОБР – смелость, мужество и призвание | Честь имею!
                </p>
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/YK2QbszJI4I?si=EnZdIeAarh_VCcVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
            <div class="theory_video" data-tags="работа, служба">
                <p class="tag">#Работа / #Служба</p>
                <p class="title">
                    Как стать полицейским в Казахстане? Кадровая служба.                </p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/AXpYJ1bkkpE?si=Ilh_9gyS5Egi-zl7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            
            
            
            </div>
            <div class="theory_video" data-tags="тренировка, беркут">
                <p class="tag">#Тренировка / #Беркут</p>
                <p class="title">
                    Как тренируется спецназ «Беркут» | Честь имею!
                </p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/HaUm0HF-TYw?si=SPN1Fm5o9e80pjSD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            </div>


    </div>
    </div>
</div>

<script>
    function filterVideos() {
        const searchQuery = document.getElementById('searchInput').value.toLowerCase();  
        const videos = document.querySelectorAll('.theory_video'); 
        
        videos.forEach(video => {
            const tags = video.getAttribute('data-tags').toLowerCase(); 
            if (tags.includes(searchQuery)) {
                video.style.display = 'block'; 
            } else {
                video.style.display = 'none';  
            }
        });
    }
</script>

@endsection
