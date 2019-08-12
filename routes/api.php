<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carros',function(){
  $carros = App\Carro::all();
  foreach ($carros as $carro) {
    $carro->valor_format = number_format($carro->valor,2,",",".");
    $carro->marca;
    $carro->categorias;
    $carro->imagens;
  }
  return $carros;
});
