<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create', [CrudController::class, 'create']);
Route::get('/store', [CrudController::class, 'store']);
Route::get('/read', [CrudController::class, 'read']);
Route::get('/show/{id}', [CrudController::class, 'show']);
Route::get('/update/{id}', [CrudController::class, 'update']);
Route::delete('/destroy/{id}', [CrudController::class, 'destroy']);
