<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// الصفحة الرئيسية (المنيو)
Route::get('/', function () {
    return view('menu');
})->name('home');

// تعريف جميع مسارات الملاحظات
Route::resource('notes', NoteController::class);

// صفحة المنيو (بديلة)
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
