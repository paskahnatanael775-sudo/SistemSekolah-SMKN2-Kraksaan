<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

//startjurusan
Route::get('/', function () {
    return view('pages.jurusan');
});

Route::get('/jurusan', [MajorController::class, 'index']);

//endjurusan

//startjadwal

Route::get('/jadwal', function () {
    return view('pages.jadwal');
});

Route::get('/jadwal', [MajorController::class, 'jadwal']);

// endjadwal

//kelas
Route::get('/kelas', function () {
    return view('pages.kelas');
});

Route::get('/kelas', [MajorController::class, 'kelas']);
//endkelas

//guru
Route::get('/guru', function () {
    return view('pages.Guru');
});

Route::get('/guru', [MajorController::class, 'guru']);
//endguru

//murid
Route::get('/murid', function () {
    return view('pages.murid');
});

Route::get('/murid', [MajorController::class, 'murid']);
//endmurid