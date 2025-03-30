


@extends("layouts.app")

@section("main")
<div class="main">
    <div class="container">
            <p class="choose-scenario-title">Выберите сценарий: {{ $scenario['title'] }}</p>
            
            <p class="scenario-description">{{ $scenario['description'] }}</p>

            <ul class="scenario-list">
                @foreach($scenarios as $key => $scenario)
                    <li class="scenario-item">
                        <a class="scenario-link" href="{{ route('training.start', ['scenarioId' => $key]) }}">
                        <img src="{{ asset($scenario['image']) }}" alt="{{ $scenario['title'] }}" class="scenario-image">


                        </a>
                    </li>
                @endforeach
            </ul>
            
            <div class="start_btn">
                <a class="start-training-btn" href="{{ route('training.scene', ['scenarioId' => $scenarioId, 'sceneId' => 1]) }}">Начать тренировку</a>
            </div>
        </div>
    </div>
@endsection
