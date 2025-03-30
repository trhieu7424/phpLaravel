<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cateall',[CategoryController::class,'all']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/proall', [ProductController::class, 'all']);

Route::get('/cateadd', [CategoryController::class, 'create']);
Route::post('/cateaddpost', [CategoryController::class, 'createpost'])->name('cateaddpost');
Route::get('/cateall', [CategoryController::class, 'all'])->name('cateall');

Route::get('/proadd', [ProductController::class, 'create']);

Route::post('/proaddpost', [ProductController::class, 'createpost'])->name('proaddpost');
Route::get('/proall', [ProductController::class, 'all'])->name('proall');

