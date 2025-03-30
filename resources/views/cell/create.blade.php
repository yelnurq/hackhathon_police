<form action="{{ route('cell.store') }}" method="POST">
    @csrf
    <label for="name">Название ячейки:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Создать ячейку</button>
</form>
