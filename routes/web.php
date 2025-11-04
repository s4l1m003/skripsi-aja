<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
// Route utama yang menampilkan katalog properti
Route::get('/', [PropertyController::class, 'index'])->name('home');{
    return view('welcome');
};
