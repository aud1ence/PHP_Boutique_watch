<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('shop.layouts.master');
});

Route::prefix('admin')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('admin.list');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.show');
    Route::get('create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('create', [ProductController::class, 'store'])->name('admin.store');
    Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('admin.delete');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin.edit');
    Route::post('edit/{id}', [ProductController::class, 'update'])->name('admin.update');
});


//Route::get('/admin', function () {
//    return view('admin.layouts.master');
//});
