<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Inicio', function () {
    return view('Inicio.index');
})->name('inicio');

Route::get('/livros', function () {
    return view('livros.index');
})->name('livros');

Route::get('/generos', function () {
    return view('Generos.index');
})->name('generos');

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes');

Route::get('/exemplares', function () {
    return view('Exemplares.index');
})->name('exemplares');

Route::get('/emprestimos', function () {
    return view('Emprestimos.index');
})->name('emprestimos');

Route::get('/autores', function () {
    return view('Autores.index');
})->name('autores');

Route::get('/classificacao', function () {
    return view('Classificacao.index');
})->name('classificacao');

Route::get('/livros', function () {
    return view('Livros.index');
})->name('livros');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
