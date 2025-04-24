<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Category2Controller;
use App\Models\Brand;
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



Route::get('/about', function () {
    return view('about');
});



//Category Routes
Route::prefix('categories')->group(function () {
    Route::get('/cateall', [CategoryController::class, 'all'])->name('cateall');;
    Route::get('/cateadd', [CategoryController::class, 'create'])->name('cateadd');
    Route::post('/cateaddpost', [CategoryController::class, 'createpost'])->name('cateaddpost');
    Route::get('/cateall', [CategoryController::class, 'all'])->name('cateall');
    Route::get('cateedit/{id}', [CategoryController::class, "edit"])->name("cateedit");
    Route::post('cateeditpost', [CategoryController::class, "editpost"])->name("cateeditpost");
    Route::get('catedel/{id}', [CategoryController::class, "del"])->name("catedel");
});

//Category2 Routes
Route::prefix('categories2')->group(function () {
    Route::get('/cateall2', [Category2Controller::class, 'all'])->name('cateall2');
    Route::get('/cateadd2', [Category2Controller::class, 'add'])->name('cateadd2');
    Route::post('/cateaddpost2', [Category2Controller::class, 'addPost'])->name('cateaddpost2');
    Route::get('cateedit2/{id}', [Category2Controller::class, "edit"])->name("cateedit2");
    Route::post('cateeditpost2', [Category2Controller::class, "editPost"])->name("cateeditpost2");
    Route::get('catedel2/{id}', [Category2Controller::class, "del"])->name("catedel2");
});

//Product Routes
Route::prefix('products')->group(function () {
    Route::get('/proall', [ProductController::class, 'all'])->name('proall');
    Route::get('proedit/{id}', [ProductController::class, "edit"])->name("proedit");
    Route::post('proeditpost', [ProductController::class, "editpost"])->name("proeditpost");
    Route::post('/proaddpost', [ProductController::class, 'createpost'])->name('proaddpost');
    Route::get('/proadd', [ProductController::class, 'create']);
    Route::get('prodel/{id}', [ProductController::class, "del"])->name("prodel");
});


// Brand Routes
Route::prefix('brands')->group(function () {
    Route::get('/all', [BrandController::class, 'all'])->name('brandall');
    Route::get('/all2', [BrandController::class, 'all2'])->name('brandall2');
    Route::get('/create', [BrandController::class, 'create'])->name('brandcreate');
    Route::post('/create', [BrandController::class, 'createpost'])->name('brandcreatepost');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brandedit');
    Route::post('/edit', [BrandController::class, 'editpost'])->name('brandeditpost');
    Route::get('/del/{id}', [BrandController::class, 'del'])->name('branddel');
});
