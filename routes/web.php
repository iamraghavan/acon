<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\FacilitiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about/vision-and-mission', [PagesController::class, 'about']);
Route::get('/about/message-from-the-founder-and-chairman', [PagesController::class, 'message_from_founder_and_chairman']);
Route::get('/about/message-from-the-principal', [PagesController::class, 'message_from_principal']);
Route::get('/about/message-from-the-secretary', [PagesController::class, 'message_from_secretary']);
Route::get('/about/history', [PagesController::class, 'our_history']);

Route::get('/facilities/{facility}', 'App\Http\Controllers\FacilitiesController@showFacility');
Route::get('/contact', [PagesController::class, 'contact']);

Route::post('/app/sent-message', [PagesController::class, 'sent_message'])->name('contact.submit');

Route::get('/academics/nursing', [PagesController::class, 'a_nursing']);
Route::get('/academics/diploma-general-nursing-midwifery', [PagesController::class, 'a_dgnm']);
Route::get('/academics/auxiliary-nurse-midwifery', [PagesController::class, 'a_anm']);

Route::get('/admissions', [PagesController::class, 'admissions']);
Route::get('/gallery', [PagesController::class, 'gallery']);



Route::middleware('guest')->group(function () {
    Route::get('/app/login', [PagesController::class, 'login'])->name('login');
    Route::post('/app/auth-gcp/login', [PagesController::class, 'verify_login'])->name('verify_login');
});
