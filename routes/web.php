<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Capcontroller;
use App\Http\Controllers\HomeController;

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

Route::get('/new',[Capcontroller::class,'new'])->name('new');

Route::get('/index',[Capcontroller::class,'index'])->name('index');

Route::get('/index/create',[Capcontroller::class,'create'])->name('create');

Route::post('/index/create',[Capcontroller::class,'store'])->name('store');

Route::get('/index/{cap}/edit',[Capcontroller::class,'edit'])->name('edit');

Route::put('updatecap/{cap}',[Capcontroller::class,'update'])->name('update');

Route::delete('delete/{cap}',[Capcontroller::class,'delete'])->name('delete');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
