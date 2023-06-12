<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::get('/service', [AppController::class, 'service'])->name('service');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');
Route::post('api/fetch-practice-area', [AppController::class, 'fetchPracticeArea']);
Route::post('/contact/send', [AppController::class, 'send'])->name('send');
/*
Route::get('/', function () {
    return view('welcome');
});
*/