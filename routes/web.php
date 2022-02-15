<?php

use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

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
//SITE
Route::get('/', function () {
    return view('site.index');
});

Route::get('/prensa', function () {
    return view('site.prensa');
})->name('prensa');

Route::get('/concierge', function () {
    return view('site.construccion');
})->name('concierge');

Route::get('/about-us', function () {
    return view('site.about-us');
})->name('about.us');

//Promo
Route::post('/promo/create', [PromoController::class, 'create']);
Route::patch('/promo/update', [PromoController::class, 'update'])->name('promo.update');
Route::get('/promo/{source?}', function($source){
    return view('promo')->with('source', $source);
});

//QR y Promo
Route::get('/generate-code', [PromoController::class, 'generateCode']);
Route::get('/apply-code/{code}', [PromoController::class, 'applyCode'])->name('apply.code');
Route::get('/download-qr/{code}', [PromoController::class, 'downloadQr'])->name('download.qr');

/* Route::get('/reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
}); */

