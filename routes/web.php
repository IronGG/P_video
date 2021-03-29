<?php

use App\Models\Video;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/lara', function () {
    return view('welcome');
});

Route::get('/', [VideoController::class, 'show'])->name('accueil');

Route::get('/vid/{id}', [VideoController::class, 'showOne'])->name('showvideo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
