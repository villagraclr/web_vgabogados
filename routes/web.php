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
Route::get('/', [AppController::class, 'index'])->name('inicio');
Route::get('/quienes-somos', [AppController::class, 'about'])->name('quienes-somos');
Route::get('/servicios', [AppController::class, 'service'])->name('servicios');
Route::get('/contactanos', [AppController::class, 'contact'])->name('contactanos');
Route::post('api/fetch-practice-area', [AppController::class, 'fetchPracticeArea']);
Route::post('/contactanos/enviar', [AppController::class, 'send'])->name('enviar');
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
