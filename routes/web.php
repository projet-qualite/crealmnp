<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BackController;

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

//front
Route::get('/', [ClientController::class, "home"]);
Route::get('/services', [ClientController::class, "services"]);
Route::get('/apropos', [ClientController::class, "apropos"]);
Route::get('/contact', [ClientController::class, "contact"]);
Route::get('/connexion', [ClientController::class, "connexion"]);
Route::get('/inscription', [ClientController::class, "inscription"]);
Route::get('/forgot', [ClientController::class, "forgot"]);


//back

Route::get('/back', [BackController::class, "home"]);
Route::get('/message', [BackController::class, "message"]);
Route::get('/encours', [BackController::class, "encours"]);
Route::get('/traite', [BackController::class, "traite"]);
Route::get('/settings', [BackController::class, "settings"]);


