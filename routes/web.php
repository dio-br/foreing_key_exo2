<?php

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

use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Route::resource('voiture', VoitureController::class);

Route::get('admin/voiture/main', [VoitureController::class, 'index'])->name('voitures.index');
