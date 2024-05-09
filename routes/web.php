<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('Home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin

Route::get('/Admin', [Homecontroller::class, 'Index'])->middleware(['auth', 'admin']);
Route::get('/catagory', [Admincontroller::class, 'Catagory'])->middleware(['auth', 'admin']);
Route::POST('/Add_category', [Admincontroller::class, 'Add_category'])->middleware(['auth', 'admin']);
Route::get('delete_category/{id}', [Admincontroller::class, 'Delete_category'])->middleware(['auth', 'admin']);
Route::get('edite_category/{id}', [Admincontroller::class, 'edite_category'])->middleware(['auth', 'admin']);
Route::POST('updata_category/{id}', [Admincontroller::class, 'updata_category'])->middleware(['auth', 'admin']);
Route::get('/add_product', [Admincontroller::class, 'add_product'])->middleware(['auth', 'admin']);
Route::POST('/uplode_product', [Admincontroller::class, 'uplode_product'])->middleware(['auth', 'admin']);
Route::get('/view_product', [Admincontroller::class, 'view_product'])->middleware(['auth', 'admin']);
Route::get('delete_product/{id}', [Admincontroller::class, 'Delete_product'])->middleware(['auth', 'admin']);
Route::get('edite_product/{id}', [Admincontroller::class, 'edite_product'])->middleware(['auth', 'admin']);
Route::POST('update_product/{id}', [Admincontroller::class, 'update_product'])->middleware(['auth', 'admin']);
Route::get('/search_product', [Admincontroller::class, 'search_product'])->middleware(['auth', 'admin']);



// User route

Route::get('/', [Homecontroller::class, 'Home'])->name('Home.index');

Route::get('/dashboard', [Homecontroller::class, 'home_login'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('product_details/{id}', [Homecontroller::class, 'product_details']);
Route::get('add_cart/{id}', [Homecontroller::class, 'add_cart'])->middleware(['auth', 'verified']);
Route::get('/mycart', [Homecontroller::class, 'mycart'])->middleware(['auth', 'verified']);

Route::get('delete_mycart/{id}', [Homecontroller::class, 'Delete_mycart'])->middleware(['auth', 'verified']);


