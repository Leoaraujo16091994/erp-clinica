<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;


Route::resource('/produto', ProdutoController::class);

Route::get('/', function () {
 return view ('welcome');  
});