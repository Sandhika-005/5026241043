<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/DELL', function () {
	return view('dell');
});

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/biodata', [DosenController::class, 'biodata']);



Route::get('/tugas', function () {
    return view('tugas.menu', [
        'nama' => 'Muhammad Sandhika Setiawan'
    ]);
});

Route::get('/tugas/pertemuan-1', function () {
    return view('tugas.intro');
});

Route::get('/tugas/pertemuan-2', function () {
    return view('tugas.news');
});

Route::get('/tugas/pertemuan-3', function () {
    return view('tugas.responsive');
});

Route::get('/tugas/tugas-pertemuan-3', function () {
    return view('tugas.tugas-boostrap4');
});

Route::get('/tugas/pertemuan-4', function () {
    return view('tugas.layout');
});

Route::get('/tugas/pertemuan-5', function () {
    return view('tugas.dell2');
});

Route::get('/tugas/tugas-pertemuan-5', function () {
    return view('tugas.linktree');
});

Route::get('/tugas/pertemuan-5.1', function () {
    return view('tugas.index');
});

Route::get('/tugas/pertemuan-3.1', function () {
    return view('tugas.template');
});

Route::get('/tugas/pertemuan-2.1', function () {
    return view('tugas.news-1');
});
