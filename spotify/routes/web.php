<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Spotify;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// Facebook login
/*Route::get('auth/facebook', [Spotify::class, 'redirectToFB']);
Route::get('callback/facebook', [Spotify::class, 'handleCallback']);*/


Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/biblioteca', [HomeController::class, 'BibliotecaIndex'])->name('BibliotecaIndex');

Route::get('/playlist', [HomeController::class, 'playlistIndex'])->name('playlist');

Route::get('/tusmegusta', [HomeController::class, 'TusMegustaIndex'])->name('tusmegusta');
///////Rutas API

//Route::post('/InsertarCancion',[HomeController::class, 'InsertarCancion']);

Route::post('/InsertarCancion', 'App\Http\Controllers\HomeController@InsertarCancion');

Route::get('/AllCanciones', 'App\Http\Controllers\HomeController@AllCanciones');


