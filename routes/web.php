<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class, 'index'])->name('welcome.index');

//perdivisian

Route::get("/photography", function() 
{
    return view('photography');
})->name("foto");

Route::get("/radio", function() 
{
    return view('radio');
})->name("radio");

Route::get("/website", function() 
{
    return view('website');
})->name("website");

Route::get("/editing", function() 
{
    return view('editing');
})->name("editing");

Route::get("/artikel", function() 
{
    return view('artikel');
})->name("artikel");

Route::resource('/news', NewsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/post', PostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
