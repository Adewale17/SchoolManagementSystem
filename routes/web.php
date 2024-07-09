<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\GuardianController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->as('admin.')->group(function () {
    Route::prefix('classrooms')->as('classrooms.')->group(function(){
        Route::post('', [ClassroomController::class, 'store'])->name('store');
        Route::get('', [ClassroomController::class, 'index']);
        Route::get('/{classroom}', [ClassroomController::class, 'show']);
        Route::patch('/{classroom}', [ClassroomController::class, 'update']);
        Route::delete('/{classroom}', [ClassroomController::class, 'destroy']);
    });

    Route::prefix('dashboard')->as('dashboard.')->group(function(){
        Route::post('', [AdminController::class, 'store'])->name('store');
        Route::get('', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/{classroom}', [AdminController::class, 'show']);
        Route::patch('/{classroom}', [AdminController::class, 'update']);
        Route::delete('/{classroom}', [AdminController::class, 'destroy']);
    });
    Route::prefix('teachers')->as('teacher.')->group(function(){
        Route::get('new', [TeacherController::class, 'create'])->name('create');
        Route::post('store', [TeacherController::class, 'store'])->name('store');
        Route::get('', [TeacherController::class, 'index'])->name('index');
        Route::get('/{teacher}', [TeacherController::class, 'show'])->name('show');
        Route::get('/{teacher}/edit', [TeacherController::class, 'edit'])->name('edit');
        Route::patch('/{teacher}', [TeacherController::class, 'update'])->name('update');
        Route::delete('/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('guardians')->as('guardian.')->group(function(){
        Route::get('new', [GuardianController::class, 'create'])->name('create');
        Route::post('store', [GuardianController::class, 'store'])->name('store');
        Route::get('', [GuardianController::class, 'index'])->name('index');
        Route::get('/{guardian}', [GuardianController::class, 'show'])->name('show');
        Route::get('/{guardian}/edit', [GuardianController::class, 'edit'])->name('edit');
        Route::patch('/{guardian}', [GuardianController::class, 'update'])->name('update');
        Route::delete('/{guardian}', [GuardianController::class, 'destroy'])->name('destroy');
    });


});
