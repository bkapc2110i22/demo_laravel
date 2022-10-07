<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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