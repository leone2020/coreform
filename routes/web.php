<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

// Pagine principali
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/chi-siamo', [HomeController::class, 'chiSiamo'])->name('chi-siamo');
Route::get('/universita', [HomeController::class, 'universita'])->name('universita');
Route::get('/orientamento', [HomeController::class, 'orientamento'])->name('orientamento');
Route::get('/contatti', [HomeController::class, 'contatti'])->name('contatti');
Route::get('/acquista', [HomeController::class, 'acquista'])->name('acquista');
Route::get('/certificazioni', [HomeController::class, 'certificazioni'])->name('certificazioni');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');

// Pagina di dettaglio delle certificazioni
Route::get('/certificazioni/{slug}', [HomeController::class, 'certificazioneDettaglio'])->name('certificazione.dettaglio');

// Rotta di test per debug
Route::get('/test', function() {
    return "Se vedi questo messaggio, le route di Laravel funzionano correttamente.";
});

Route::get('/test-db', function() {
    try {
        DB::connection()->getPdo();
        return 'Database connection: OK! ('.DB::connection()->getDatabaseName().')';
    } catch (\Exception $e) {
        return 'Database connection failed: ' . $e->getMessage();
    }
});