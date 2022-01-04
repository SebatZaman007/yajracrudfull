<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\Frontend\StudentControlller;

Route::get('/admin-index',[StudentController::class,'adminIndex'])->name('admin.index');
Route::get('/admin-create',[StudentController::class,'adminCreate'])->name('admin.create');
Route::post('/admin-store',[StudentController::class,'adminStore'])->name('admin.store');
Route::get('/admin-edit/{id}',[StudentController::class,'adminEdit'])->name('admin.edit');
Route::post('/admin-update',[StudentController::class,'adminUpdate'])->name('admin.update');
Route::get('/admin-delete/{id}',[StudentController::class,'adminDelete'])->name('admin.delete');

//frontend

Route::get('/',[StudentControlller::class,'blogIndex'])->name('blog.index');

