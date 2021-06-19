<?php

use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('producto', ProductoController::class)->middleware('auth');
Auth::routes(['register'=>true, 'reset'=>false]);

Route::get('/home', [ProductoController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/', [ProductoController::class, 'index'])->name('home');
});
