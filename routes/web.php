<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TheoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CellController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoResponseController;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/analysis', function () {
    return view('videos.main');
});

Route::get('/theory', function () {
    return view('theory.index');
});

Route::get('/theory/constitution', function () {
    return view('theory.constitution');
});

Route::get('/theory/criminalcode', function () {
    return view('theory.criminalcode');
});

Route::get('/theory/adminstrative', function () {
    return view('theory.adminstrative');
});

Route::get('/theory/test', function () {
    return view('theory.test');
});

Route::get('/theory/videos', function () {
    return view('theory.videos');
});


Route::get('/training/{scenarioId}', [TrainingController::class, 'startScenario'])->name('training.start');
Route::match(['get', 'post'], '/training/{scenarioId}/scene/{sceneId}', [TrainingController::class, 'handleChoice'])
    ->name('training.handleChoice');
Route::get('/training/{scenarioId}/scene/{sceneId}', [TrainingController::class, 'handleChoice'])->name('training.scene');

Route::post('/videos/{video}/responses', [VideoResponseController::class, 'store'])->name('video.responses.store');



Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

});

Route::middleware('auth')->group(function () {
    Route::get('videos', [VideoController::class, 'index']);
    Route::get('videos/post', [VideoController::class, 'create']);
    Route::post('videos', [VideoController::class, 'store']);
    Route::get('videos/{id}', [VideoController::class, 'show']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/cells', [CellController::class, 'index'])->name('cell.index');
    Route::get('/cell/create', [CellController::class, 'create'])->name('cell.create');
    Route::post('/cell', [CellController::class, 'store'])->name('cell.store');
    Route::post('/cell/{cell}/join', [CellController::class, 'join'])->name('cell.join');
    Route::delete('cell/{cell}', [CellController::class, 'destroy'])->name('cell.destroy');
    Route::post('cell/{cell}/leave', [CellController::class, 'leave'])->name('cell.leave');

});
