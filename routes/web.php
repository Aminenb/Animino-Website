<?php

use App\Http\Controllers\DevisController;
use App\Http\Controllers\MessageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Contact;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/', function () {
        return Inertia::render('src/App');
    })->name('app.index');
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
});
Route::get('/projects2', [\App\Http\Controllers\ProjectController::class, 'create2']);
Route::post('/message/create',[MessageController::class,'store']);
Route::post('/devis/create',[DevisController::class,'store']);
