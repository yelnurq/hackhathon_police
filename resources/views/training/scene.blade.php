@extends("layouts.app")

@section("main")
<div class="training">
    <div class="training_container">
        <p class="choose-scenario-title" id="scenarioTitle">{{ $scenario['title'] }}</p>
        <p class="scenario-description" id="scenarioDescription">{{ $scene['content'] }}</p>

        <form class="answer-form" id="answerForm" action="{{ route('training.handleChoice', ['scenarioId' => $scenarioId, 'sceneId' => $sceneId]) }}" method="POST">
            @csrf
            @foreach ($scene['answers'] as $key => $answer)
                <div class="answer_btns" class="answerBtn">
                    <button class="answer-btn" type="submit" name="choice" value="{{ $key }}" 
                    style="background-image: url('{{ asset($answer['image']) }}'); background-size: cover; background-position: center;">
                    <span class="answer-text">{{ $answer['answer'] }}</span>
                    </button>
                </div>

                @if (strpos($answer['image'], 'images/end.svg') !== false)
                    <script>
                        document.getElementById('timer').style.display = 'none';
                    </script>
                @endif
            @endforeach
        </form>

        <div id="timer" style="font-size: 20px; margin-top: 20px; color: orange;"></div>

        <div id="lateMessage" style="display: none;">
            <p class="choose-scenario-title">Тренировка завершена</p>
            <p class="scenario-description">Ты не успел! Время вышло.</p>
        </div>

        <div id="startBtn" class="start_btn" style="display: none;">
            <a class="start-training-btn" href="{{ route('training.start', ['scenarioId' => 'hostage']) }}">Вернуться к выбору сценария</a>
        </div>
    </div>
</div>

<script>
    let timeLeft = 20; 
    const timerElement = document.getElementById('timer');
    const form = document.getElementById('answerForm');
    const lateMessage = document.getElementById('lateMessage');
    const scenarioTitle = document.getElementById('scenarioTitle');
    const scenarioDescription = document.getElementById('scenarioDescription');
    const startBtn = document.getElementById('startBtn'); 
    let timerInterval;

    function updateTimer() {
        if (timeLeft <= 0) {
            lateMessage.style.display = 'block'; 
            timerElement.style.display = 'none'; 

            form.style.display = 'none'; 

            scenarioTitle.style.display = 'none';
            scenarioDescription.style.display = 'none';

            startBtn.style.display = 'block'; 

            clearInterval(timerInterval); 
        } else {
            timerElement.textContent = 'Осталось времени: ' + timeLeft + ' сек';
            timeLeft--;
        }
    }

    timerInterval = setInterval(updateTimer, 1000);
</script>

@endsection
