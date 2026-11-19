<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/siswa', [SiswaController::class, "index"]);
