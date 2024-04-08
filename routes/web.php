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

Route::get('/', function () {

    $titolo="Prima pagina con laravel";

    $testo="hello world ,quanto è comodo laravel";


    // Create array containing variables and their values . Definizione di compact
    return view('ciao',compact('titolo','testo') );
});
