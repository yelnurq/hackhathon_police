<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use Illuminate\Http\Request;

class CellController extends Controller
{
    public function create()
    {
        return view('cell.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Cell::create([
            'name' => $request->name,
        ]);

        return redirect()->route('cell.index');
    }

    public function index()
    {
        $cells = Cell::all();
        return view('cell.index', compact('cells'));
    }

    public function join(Cell $cell)
    {
        if ($cell->users()->where('user_id', auth()->id())->exists()) {
            return back()->with('error', 'Вы уже записаны в эту ячейку!');
        }

        if ($cell->hasSpace()) {
            $cell->users()->attach(auth()->id());
            return back()->with('success', 'Вы успешно записались в ячейку!');
        }

        return back()->with('error', 'В ячейке нет свободных мест!');
    }
    public function destroy(Cell $cell)
    {
        if (auth()->user()->is_admin) {
            $cell->delete();
            return redirect()->route('cell.index')->with('success', 'Ячейка успешно удалена.');
        }

        return back()->with('error', 'У вас нет прав для удаления ячеек.');
    }
    public function leave(Cell $cell)
    {
        if ($cell->users()->where('user_id', auth()->id())->exists()) {
            $cell->users()->detach(auth()->id());
            return back()->with('success', 'Вы успешно покинули ячейку!');
        }

        return back()->with('error', 'Вы не записаны в эту ячейку!');
    }

}


