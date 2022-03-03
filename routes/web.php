<?php

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
    return view('welcome');
});

Auth::routes();




Route::group(['middleware'=> 'auth', 'prefix'=> 'admin'], function () {
        // USERS
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [\App\Http\Controllers\UserController::class,'create'])->name('users.create');
    Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}/delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

            // CATEGORIES
    Route::resource('/categories', App\Http\Controllers\CategoriesController::class);
    Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.delete');

    // SETTINGS
    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::get('/settings/create', [\App\Http\Controllers\SettingController::class, 'create'])->name('settings.create');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'store'])->name('settings.store');
    Route::get('/settings/{id}/edit', [\App\Http\Controllers\SettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings/{id}', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
    Route::delete('/settings/{id}/delete', [\App\Http\Controllers\SettingController::class, 'destroy'])->name('settings.delete');

    // PRODUCTS
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [\App\Http\Controllers\ProductController::class,'create'])->name('products.create');
    Route::post('/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::put('/products/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}/delete', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.delete');



});


Route::group(['middleware' => ['role:Administrator', 'auth']], function()
{
    Route::get('/role', [\App\Http\Controllers\HomeController::class, 'checkRole'])->name('check.role');
});






