<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
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

Route::get('/page1', [PageController::class, 'afficherpage1']);
Route::get('/about', [PageController::class, 'afficherpage2']);
Route::get('/affichage/donnees', [PageController::class, 'donnees']);
Route::get('/category/add', [CategoryController::class, 'AddCategory']);