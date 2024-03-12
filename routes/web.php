<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// add prefix to the route admin 
Route::prefix('admin')->group(function () {
    // add middleware to the route
    Route::middleware(['auth'])->group(function () {
        #User
        Route::get('user', [UserController::class, 'index'])->name('user.index');

        #category
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');

        #role
        Route::get('role', [RoleController::class, 'index'])->name('role.index');
        Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
        Route::delete('/role/{role}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
        Route::get('/role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/update/{role}', [RoleController::class, 'update'])->name('role.update');  
        
        #items 
        Route::get('items', [ItemController::class, 'index'])->name('items.index');
        Route::get('items/create', [ItemController::class, 'create'])->name('items.create');
        Route::post('items/store', [ItemController::class, 'store'])->name('items.store');
        Route::get('items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
        Route::put('items/{item}/update', [ItemController::class, 'update'])->name('items.update');
        Route::delete('items/{item}/delete', [ItemController::class, 'destroy'])->name('items.destroy');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
});

