<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/gioi-thieu.html', [HomeController::class, 'about'])->name('home.about'); 
Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); 
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store'); 
Route::delete('/category/{cat}', [CategoryController::class, 'delete'])->name('category.delete'); 
Route::get('/category/trashed', [CategoryController::class, 'trashed'])->name('category.trashed'); 
Route::get('/category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
Route::get('/category/forceDelete/{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
Route::get('/category/edit/{cat}', [CategoryController::class, 'edit'])->name('category.edit'); 
Route::put('/category/update/{cat}', [CategoryController::class, 'update'])->name('category.update'); 


Route::get('/product', [ProductController::class, 'index'])->name('product.index'); 
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); 
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store'); 
