<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');
Route::prefix('executor')->group(function () {
    Route::get('/', [App\Http\Controllers\ExecutorController::class, 'dashboard'])->name('executor.dashboard');
});
Route::get('/notifications/{id}', [App\Http\Controllers\NotificationController::class, 'show'])->name('notifications.show');
Route::get('/recommendations', [App\Http\Controllers\RecommendationController::class, 'index'])->name('recommendations');
