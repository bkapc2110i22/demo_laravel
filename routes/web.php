<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'check_login']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Route::resource('category', CategoryController::class);
    // Route::resource('product', ProductController::class);
    Route::resources([
        'category' =>  CategoryController::class,
        'product' =>  ProductController::class,
        'blog' =>  BlogController::class,
    ]);

    Route::group(['prefix' => 'category'], function() {
        Route::get('/trashed', [CategoryController::class, 'trashed'])->name('category.trashed'); 
        Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::get('/forceDelete/{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    });
});
