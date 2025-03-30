@extends("layouts.app")

@section("main")
    <div class="videos_index">
        <div class="videos_container">
            <p class="choose-scenario-title">Все видео</p>
            <p class="scenario-description">Просмотрите все доступные видео с разбором ситуаций и рекомендациями от инструктора.</p>

            <div class="videos">

        @if ($videos && $videos->isNotEmpty())
            @foreach ($videos as $video)
            <a href="{{ url('videos/'.$video->id) }}">
                <div class="video">
                    <div class="left_video">
                        <video width="500" controls>
                            <source src="{{ Storage::url($video->video_path) }}" type="video/mp4">
                            Ваш браузер не поддерживает видео.
                        </video>
                        <p>Отправлено: <span>{{ $video->created_at->format('d.m.Y') }}</span></p> 
                        <p>Автор: <span>{{ $video->user->fullname }}</span></p> 
                        <p>Звание: <span>{{ $video->user->rank }}</span></p> 

                    </div>
                    <div class="desc_video">
                        <div class="desc_title">
                            <p>Описание:</p>
                        </div>
                        <p class="desc_text">{{ $video->description }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        @else
            <p class="notfound">У вас нет видео.</p>
        @endif

            </div>
        </div>
    </div>
@endsection
