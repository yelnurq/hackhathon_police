<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide; 

class TheoryController extends Controller
{

    // public function guides()
    // {
    //     $guides = Guide::all(); 

    //     return view('theory.guides', compact('guides'));
    // }

    // public function acts()
    // {
    //     $acts = [
    //         ['title' => 'Закон о полиции', 'description' => 'Описание закона о полиции'],
    //         ['title' => 'Уголовный кодекс', 'description' => 'Описание уголовного кодекса'],
    //     ];

    //     return view('theory.acts', compact('acts'));
    // }

    // public function trainingMaterials()
    // {
    //     $materials = [
    //         ['title' => 'Урок 1: Основы безопасности', 'description' => 'Описание первого урока'],
    //         ['title' => 'Урок 2: Захват заложников', 'description' => 'Описание второго урока'],
    //     ];

    //     return view('theory.training_materials', compact('materials'));
    // }

    // public function videos()
    // {
    //     $videos = [
    //         ['title' => 'Видеоурок 1: Освобождение заложников', 'url' => 'https://example.com/video1'],
    //         ['title' => 'Видеоурок 2: Кибербезопасность', 'url' => 'https://example.com/video2'],
    //     ];

    //     return view('theory.videos', compact('videos'));
    // }

        // public function view($id)
        // {
        //     $material = [
        //         'id' => $id,
        //         'title' => 'Материал ' . $id,
        //         'content' => 'Детальное описание материала с ID ' . $id,
        //     ];

        //     return view('theory.view', compact('material'));
        // }

        // public function search(Request $request)
        // {
        //     $query = $request->input('search');
        //     $guides = Guide::where('title', 'LIKE', "%$query%")->get();

        //     return view('theory.guides', compact('guides'));
        // }
}
