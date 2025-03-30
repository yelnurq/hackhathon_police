@extends("layouts.app")

@section("main")
    <div class="videos_create">
        <div class="videos_container">
            <p class="choose-scenario-title">Анализ действий</p>
            <p class="scenario-description">загрузите свое видео с места случая для анализа ситуации</p>
            <div class="video-form">
                <form action="{{ url('videos') }}" method="POST" enctype="multipart/form-data" class="videos_form">
                    @csrf
                    <div class="form_group">
                        <input type="file" name="video" accept="video/*" class="file_input" required max="104857600">
                    </div>
                    <div class="form_group">
                        <textarea name="description" placeholder="Краткое описание ситуации, тайминги" required class="textarea"></textarea>
                    </div>
                <div class="start_btn">

                        <button type="submit" class="submit_button">Загрузить видео</button>
                </div>
                    </form>
            </div>
            
            
        </div>
    </div>
@endsection