<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/showroom', [ShowroomController::class, 'index'])->name('showroom.index');

Route::get('/showroom/create', [ShowroomController::class, 'create'])->name('showroom.create');

Route::post('/showroom/store', [ShowroomController::class, 'store'])->name('showroom.store');
