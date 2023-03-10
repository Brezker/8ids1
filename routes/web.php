<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//
Route::get('/', [AlumnosController::class, 'index'])->name('alumnos.index');
// Route::post('/store', [AlumnosController::class, 'store'])->name('alumnos.store');
Route::get('/edit', [AlumnosController::class, 'edit'])->name('alumnos.edit');
