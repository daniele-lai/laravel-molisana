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

Route::get('/', function () {

    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $pasta) {

        $pasta['id'] = $key;

        if ($pasta["tipo"] == "lunga") {
            $lunga[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
            $corta[] = $pasta;
        } elseif ($pasta["tipo"] == "cortissima") {
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        "pasta_lunga" => $lunga,
        "pasta_corta" => $corta,
        "pasta_cortissima" => $cortissima
    ]);
})->name('home');

Route::get('/products/{id}', function ($id) {

    $data = config('paste');

    $formato = $data[$id];

    return view('products', [
        'formato' => $formato
    ]);
})->where('id', '[0-9]+')->name('products');;

Route::get('/news', function () {
    return view('news');
})->name('news');;
