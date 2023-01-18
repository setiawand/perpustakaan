<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [DashboardController::class, 'index']);

//Route untuk buku
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);

//Route untuk siswa
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);

//Route untuk operator
Route::get('/operators', [OperatorController::class, 'index']);
Route::get('/operators/create', [OperatorController::class, 'create']);
