<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}',[EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', [eventController::class, 'dashboard'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [EventController::class, 'index']);
});

