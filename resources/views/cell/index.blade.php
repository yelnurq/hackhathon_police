

@extends("layouts.app")

@section("main")
<div class="cells">
    <div class="container">
            <p class="choose-scenario-title">запись на тренировку vr</p>
            
            <p class="scenario-description">Улучшите свои навыки и повысите командную эффективность с помощью виртуальных тренировок!</p>

        <div class="cells_cont">
            @foreach ($cells as $cell)
            <div class="cell">
                <p class="cell_title">{{ $cell->name }}</p>
                <p class="cell_count">Записано пользователей:<span> {{ $cell->userCount() }} из {{ $cell->max_users }} </span></p>
                <p class="cell_users">Пользователи: 
                    @foreach ($cell->users as $user)
                    <span> {{ $user->fullname }}@if (!$loop->last)</span>, @endif
                    @endforeach
                </p>
                <div class="cell_btns" style="display: flex; justify-content:center;">
                    
                @if ($cell->hasSpace() && !$cell->users->contains(auth()->user()))
                <form action="{{ route('cell.join', $cell) }}" method="POST">
                    @csrf
                    <button class="cell_button" type="submit">Записаться</button>
                </form>
            @elseif ($cell->users->contains(auth()->user()))
                <form action="{{ route('cell.leave', $cell) }}" method="POST" style="display: inline;">
                    @csrf
                    <button class="cell_button" type="submit" style="color: rgb(225, 72, 72);">Покинуть ячейку</button>
                </form>
            @else
                <p class="font-size:20px; color:white;">Нет свободных мест!</p>
            @endif
    
            @if(Auth::user()->is_admin)
                <form action="{{ route('cell.destroy', $cell) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="cell_button" type="submit" style="color: rgb(214, 71, 71);">Удалить</button>
                </form>
            @endif
                </div>
            </div>
        @endforeach
        </div>
        
        
            @if(Auth::user()->is_admin)
            <div class="start_btn">
                <button class="submit_button" style="font-size: 25px" id="openModalBtn">Добавить ячейку</button>

            </div>

            <div id="responseModal" class="modal">
                <div class="modal-content">
                    <span class="close-btn" id="closeModalBtn">&times;</span>
                    <form action="{{ route('cell.store') }}" method="POST">
                        @csrf
                        <input class="file_input" type="text" name="name" id="name" placeholder="Название ячейки:" required>
                        <button class="cell_button" type="submit">Создать ячейку</button>
                    </form>
                    
                </div>
            </div>

        @endif
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