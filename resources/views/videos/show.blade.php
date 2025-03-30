@extends("layouts.app")

@section("main")
    <div class="videos_show">
        <div class="videos_container">
            <p class="choose-scenario-title">Просмотр видео</p>
            <p class="scenario-description">Ответ от инструктора: Разбор ситуации и советы по дальнейшим действиям.</p>

            <div class="videos">
                <div class="left_video">
                    <video width="500" controls>
                        <source src="{{ Storage::url($video->video_path) }}" type="video/mp4">
                        Ваш браузер не поддерживает видео.
                    </video>

                    <p>Отправлено: <span>{{ $video->created_at->format('d.m.Y') }}</span></p>

                    <p>Автор: <span>{{ $video->user->fullname }}</span></p>

                    <p>Звание: <span>{{ $video->user->rank }}</span></p>

                    @if(Auth::user()->is_admin)
                        <button class="submit_button" style="font-size: 25px" id="openModalBtn">Ответить</button>

                        <div id="responseModal" class="modal">
                            <div class="modal-content">
                                <span class="close-btn" id="closeModalBtn">&times;</span>
                                <form action="{{ route('video.responses.store', $video->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="response" style="font-size:25px">Ответ:</label>
                                        <textarea name="response" id="response" rows="3" class="response_textarea" style="width: 94%"></textarea>
                                    </div>
                                    <div class="start_btn" style="margin:0">
                                        <button type="submit" style="font-size: 25px" class="submit_button">Ответить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="desc_video">
                    <div class="desc_title">
                        <p>Описание:</p>
                    </div>
                    <p class="desc_text">{{ $video->description }}</p>
                </div>

                <div class="response">
                    <div class="response_title">
                        <p>Ответ от инструктора:</p>
                    </div>

                    @foreach($video->responses as $response)
                    <div>
                        <p class="desc_text" style="margin:3px;">
                            {{ $response->response }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("responseModal");
        var openModalBtn = document.getElementById("openModalBtn");
        var closeModalBtn = document.getElementById("closeModalBtn");

        openModalBtn.onclick = function() {
            modal.style.display = "block";
        }

        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
