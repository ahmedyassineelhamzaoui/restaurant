<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



    
Route::controller(App\Http\Controllers\platController::class)->group(function () {
    Route::get('/welcome', 'display');
    Route::get('/', 'display');
    Route::get('/dashboard','index');
    Route::post('/dashboard', 'store')->name('dashboard');
    Route::delete('/dashboard/{id}', 'destroy')->name('dashboard.destroy');
    Route::get('/editPlat/{id}','edit');
    Route::put('/dashboard/{id}','update')->name('dashboard.update');
});


Route::get('/category',function(){ return view('category');})->middleware(['auth','verified'])->name('category');

Route::controller(App\Http\Controllers\categoryController::class)->group(function (){
    //  Route::get('/dashboard','display');
     Route::get('/category','index');
     Route::post('/category','store')->name('category');
     Route::delete('/category/{id}','destroy')->name('category.destroy');
     Route::put('/category','update')->name('category.update');
});
Route::controller(App\Http\Controllers\userController::class)->group(function(){
    Route::get('/user','index');
});