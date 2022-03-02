<?php

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
// route della pagina principale
Route::get('/', function () {
    $data = [
        // array di dati
        [
            "text" => "Home",
            "link" => "/"
        ],
        [
            "text" => "Chi siamo",
            "link" => "/chi-siamo"
        ],
        [
            "text" => "Contatti",
            "link" => "/contatti"
        ],
        [
            "text" => "Network",
            "link" => "/network"
        ],
        [
            "text" => "Shop",
            "link" => "/shop"
        ],
    ];
    // ritorna pure il contenuto di data
    // passando un array associativo con valore navbar che corrisponde a contenuto data
    return view('home',["navbar"=>$data]);
});
// rotta pagina chi siamo
Route::get('/chi-siamo', function () {
    return view("chisiamo");
});
// rotta pagina contatti
Route::get('/contatti', function () {
    return view("contatti");
});
// rotta pagina network
Route::get('/network', function () {
    return view("network");
});
// rotta pagina Shop
Route::get('/shop', function () {
    return view("shop");
});
