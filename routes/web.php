<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\MailController;

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

Route::post('/send_mail',[MailController::class, "mail"]);

//inscription et connexion

Route::post('/inscrire', [ClientController::class, "inscrire"]);
Route::get('/connecter', [ClientController::class, "connecter"]);

Route::get('/logout', [ClientController::class, "logout"]);

//back

Route::get('/back', [BackController::class, "home"]);
//Route::get('/message', [BackController::class, "message"]);
Route::get('/encours', [BackController::class, "encours"]);
Route::get('/demande', [BackController::class, "demande"]);
Route::get('/traite', [BackController::class, "traite"]);
Route::get('/settings', [BackController::class, "settings"]);

Route::get('/liste_admin', [BackController::class, "liste_admin"]);
Route::get('/detail_client/{id}', [BackController::class, "detail_client"]);
Route::get('/valider/{id_client}/{id}', [BackController::class, "valider"]);
Route::get('/contacter_client/{id}', [BackController::class, "contacter_client"]);





//back-elements

Route::put('/modifier_parametre', [BackController::class, "modifier_parametre"]);
Route::post('/send_demande', [BackController::class, "send_demande"]);
Route::get('/paiement', [BackController::class, "paiement"]);
Route::get('/download/{nom}', [BackController::class, "download"]);
Route::get('/modifier_demande/{id}', [BackController::class, "modifier_demande"]);

Route::put('/modifier/{id}', [BackController::class, "modifier"]);


