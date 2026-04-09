<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminNotificationController;

Route::get('/', function () {
    return view('welcome');
});

// Placeholder routes for login and register to satisfy welcome view
Route::get('/login', function () {
    return response()->json(['message' => 'Please use API for login'], 404);
})->name('login');

Route::get('/register', function () {
    return response()->json(['message' => 'Please use API for registration'], 404);
})->name('register');

// Admin notification panel (no auth guard for now - can add later)
Route::get('/admin/notifications', [AdminNotificationController::class, 'index']);
Route::post('/admin/notifications/send', [AdminNotificationController::class, 'send']);
