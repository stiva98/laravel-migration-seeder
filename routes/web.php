<?php

use Illuminate\Support\Facades\Route;
//Controllers
use App\Http\Controllers\Guest\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/contatti', [MainController::class, 'contatti'])->name('contatti');

Route::get('/chi_siamo', [MainController::class, 'chi_siamo'])->name('chi_siamo');

Route::get('/documentazione', [MainController::class, 'documentazione'])->name('documentazione');
