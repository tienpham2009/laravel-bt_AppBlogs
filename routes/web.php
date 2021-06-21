<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class , 'index'])->name('blogs.index');

Route::prefix('blogs')->group(function (){
    Route::get('/create', [PostController::class , 'create'] )->name('blogs.create');
    Route::post('/store', [PostController::class , 'store'] )->name('blogs.store');
    Route::get('{id}/edit', [PostController::class , 'edit'] )->name('blogs.edit');
    Route::post('{id}/update', [PostController::class , 'update'] )->name('blogs.update');
    Route::get('{id}/detail', [PostController::class , 'detail'] )->name('blogs.detail');
    Route::get('{id}/delete', [PostController::class , 'destroy'] )->name('blogs.destroy');
});
