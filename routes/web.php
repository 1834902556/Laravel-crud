<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/category', [HomeController::class, "category"])->name('category');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "admin"])->name('dashboard');
    Route::get('/add-product', [AdminController::class, "creteProduct"])->name('add.product');
    Route::get('/manage-product', [AdminController::class, "manageProduct"])->name('manage.product');
    Route::get('/product-details{id}', [AdminController::class, "seeDetails"])->name('details.product');
    Route::get('/delete-product{id}', [AdminController::class, "deleteProduct"])->name('delete.product');
    Route::get('/edit-product{id}', [AdminController::class, "editProduct"])->name('edit.product');
    Route::get('/add-category', [AdminController::class, "addCategory"])->name('add.category');

    Route::post('/create-product', [AdminController::class, "storeProduct"])->name('insert.product');
    Route::post('/edits-product{id}', [AdminController::class, "putEditData"])->name('edit');
    Route::post('/create-category', [AdminController::class, "storeCategory"])->name('insert.category');
});
