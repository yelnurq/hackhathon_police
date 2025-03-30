@extends("layouts.app")

@section("main")
    <div class="end_training">
        <div class="traning_container">
            <p class="choose-scenario-title">Тренировка завершена</p>
            <p class="scenario-description">{{ $message }}</p>
            <div class="start_btn">
                <a class="start-training-btn"  href="{{ route('training.start', ['scenarioId' => 'hostage']) }}">Вернуться к выбору сценария</a>
            </div>
        </div>
    </div>
@endsection
