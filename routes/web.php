<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/inicio', function () {
    return view('inicio.index');
})->name('inicio');

Route::get('/autores', function () {
    return view('autores.index');
})->name('autores');

Route::get('/classificacao', function () {
    return view('classificacao.index');
})->name('classificacao');

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes');

Route::get('/emprestimos', function () {
    return view('emprestimos.index');
})->name('emprestimos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
