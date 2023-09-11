<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('/dashboard/blog')->group(function() {
        Route::get('/', [AdminController::class, "showPost"])->name('dashboard.blog');
        Route::get('/create', [AdminController::class, "createPost"])->name('dashboard.blog.create');
        Route::post('/create', [AdminController::class, "storePost"])->name('dashboard.blog.store');
        Route::get('/edit/{post}', [AdminController::class, "editPost"])->name('dashboard.blog.edit');
        Route::put('/edit/{post}', [AdminController::class, "updatePost"])->name('dashboard.blog.update');
        Route::get('/delete/{post}', [AdminController::class, "deletePost"])->name('dashboard.blog.delete');
    });
    Route::prefix('/dashboard/gallery')->group(function(){
        Route::get('/photos', [GalleryController::class, "index"])->name('dashboard.gallery.index');
        Route::get('/photos/create', [GalleryController::class, "create"])->name('dashboard.gallery.create');
        Route::post('/photos/create', [GalleryController::class, "store"])->name('dashboard.gallery.store');
    });
    Route::get('/dashboard/users', function () {
        return view('dashboard/users');
    })->name('dashboard.users');
    Route::prefix('/dashboard/categories')->group(function() {
        Route::get('/', [CategoryController::class, "index"])->name('dashboard.categories');
        Route::get('/create', [CategoryController::class, "create"])->name('dashboard.categories.create');
        Route::post('/create', [CategoryController::class, "store"])->name('dashboard.categories.store');
        Route::get('/edit/{category}', [CategoryController::class, "edit"])->name('dashboard.categories.edit');
        Route::put('/edit/{category}', [CategoryController::class, "update"])->name('dashboard.categories.update');
        Route::delete('/delete/{category}', [CategoryController::class, "destroy"])->name('dashboard.categories.destroy');
    });

});