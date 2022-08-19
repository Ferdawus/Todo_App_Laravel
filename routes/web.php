<?php

use App\Http\Controllers\TodoController;
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

Route::get('/dashboard', function(){
    return view('dashboard.home');
})->middleware(['auth'])->name('dashboard');

Route::get('/show-item',[TodoController::class,'index'])->name('todos.index');
Route::get('/create-item',[TodoController::class,'onCreate']);
Route::post('/create-item',[TodoController::class,'store'])->name('todos.create');
Route::get('/todo/{id}/edit',[TodoController::class,'edit']);
Route::post('/todo/update',[TodoController::class,'update'])->name('todos.update');
Route::get('/todo/{id}/delete',[TodoController::class,'destroy'])->name('todos.destroy');
require __DIR__.'/auth.php';
