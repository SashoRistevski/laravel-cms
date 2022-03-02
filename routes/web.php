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
    Route::delete('/users/{id}/delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

            // CATEGORIES
    Route::resource('/categories', App\Http\Controllers\CategoriesController::class);
    Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.delete');

    // SETTINGS
    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::get('/settings/create', [\App\Http\Controllers\SettingController::class, 'create'])->name('settings.create');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'store'])->name('settings.store');

});


Route::group(['middleware' => ['role:Administrator', 'auth']], function()
{
    Route::get('/role', [\App\Http\Controllers\HomeController::class, 'checkRole'])->name('check.role');
});






