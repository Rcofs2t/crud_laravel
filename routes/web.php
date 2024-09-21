<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SiswaController;
Route::get('siswa', [SiswaController::class,'index']);

use App\Http\Controllers\PamongController;
Route::get('pamong',[PamongController::class,'index'] );

use App\Http\Controllers\KelasController;
Route::get('kelas',[KelasController::class,'index'] );

use App\Http\Controllers\MapelController;
Route::get('mapel', [MapelController::class,'index']);