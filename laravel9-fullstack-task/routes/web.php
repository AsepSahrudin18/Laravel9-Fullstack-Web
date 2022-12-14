<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\MahasiswaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routing buat task 2
Route::get('/nilaimahasiswa', [MahasiswaController::class, 'nilaiMahasiswa']);