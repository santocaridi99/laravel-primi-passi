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
$data = [
    // array di dati text quello che stampo nel link
    // link mi servirà  per l'href
    [
        "text" => "Home",
        "link" => "home"
    ],
    [
        "text" => "Chi siamo",
        "link" => "chi-siamo"
    ],
    [
        "text" => "Contatti",
        "link" => "contatti"
    ],
    [
        "text" => "Network",
        "link" => "network"
    ],
    [
        "text" => "Shop",
        "link" => "shop"
    ],
];
// quando il routes  ritorna solo view posso usare Route::view
// posso rinominare le rotte con il nome desiderato
// farò in modo che queste rotte accettano in ingresso un array associativo che ha come valore il data
// route della pagina principale
Route::view('/',"home",["data"=>$data])->name('home');
// rotta pagina chi siamo
Route::view('/chi-siamo',"chisiamo",["data"=>$data])->name('chi-siamo');
// rotta pagina contatti
Route::view('/contatti',"contatti",["data"=>$data])->name('contatti');
// rotta pagina network
Route::view('/network',"network",["data"=>$data])->name('network');
// rotta pagina Shop
Route::view('/shop',"shop",["data"=>$data])->name('shop');
