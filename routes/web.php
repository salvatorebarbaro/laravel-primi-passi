<?php

use Illuminate\Support\Facades\Route;

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
// Quindi sì, puoi considerare questo codice come una definizione di una rotta che indirizza Laravel a gestire le richieste alla homepage del tuo sito web e a restituire i dati alla vista ciao.
Route::get('/', function () {

    $titolo="Prima pagina con laravel";

    $testo="hello world ,quanto è comodo laravel";


    // Create array containing variables and their values . Definizione di compact
    return view('ciao',compact('titolo','testo') );
});

Route::get('/seconda', function () {

    $titoloSeconda="Seconda pagina di laravel";


    // Create array containing variables and their values . Definizione di compact
    return view('second',compact('titoloSeconda') );
})->name('seconda');
