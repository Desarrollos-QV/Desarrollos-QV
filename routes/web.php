<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('website/index');
})->name('index');


/*
|-----------------------------------------------
| Services
|--------- -------------------------------------
*/
Route::get('services', [HomeController::class, 'services'])->name('services');


/*
|-----------------------------------------------
| Clients
|--------- -------------------------------------
*/
Route::get('clients', [HomeController::class, 'clients'])->name('clients');

/*
|-----------------------------------------------
| Contact
|--------- -------------------------------------
*/
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

/*
|-----------------------------------------------
| Send To Wahtsapp
|--------- -------------------------------------
*/
Route::get('chatin-whatsapp', [HomeController::class, 'chatinWhatsapp'])->name('chatinWhatsapp');


/*
|-----------------------------------------------
| Newsletter
|--------- -------------------------------------
*/
Route::post('newsletter', [HomeController::class, 'newsletter'])->name('newsletter');