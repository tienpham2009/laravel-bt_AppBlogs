<?php

use App\Http\Controllers\CategoryController;
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

Route::prefix('category')->group( function (){
    Route::get('/' , [CategoryController::class , 'index'])->name('category.index');
    Route::get('/create' , [CategoryController::class , 'create'])->name('category.create');
    Route::post('/store' , [CategoryController::class , 'store'])->name('category.store');
    Route::get('{id}/delete' , [CategoryController::class , 'destroy'])->name('category.destroy');
    Route::get('{id}/edit' , [CategoryController::class , 'edit'])->name('category.edit');
    Route::post('{id}/update' , [CategoryController::class , 'update'])->name('category.update');
});
