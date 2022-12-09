<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\FacturasController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* creacion de las rutas*/
Route::post('/clientes', [ClientesController::class,'create']);
Route::get('/clientes', [ClientesController::class,'obtain']);
Route::get('/clientes/{idShow}', [ClientesController::class,'show']);
Route::put('/clientes/{idEdit}', [ClientesController::class,'modify']);
Route::delete('/clientes/{idDelete}', [ClientesController::class,'delete']);

Route::post('/detalles', [DetallesController::class,'create']);
Route::get('/detalles', [DetallesController::class,'obtain']);

Route::get('/detalles/{idShow}', [DetallesController::class,'show']);
Route::put('/detalles/{idEdit}', [DetallesController::class,'modify']);
Route::delete('/detalles/{idDelete}', [DetallesController::class,'delete']);

Route::put('/detalles', [DetallesController::class,'modify']);
Route::delete('/detalles', [DetallesController::class,'delete']);

Route::post('/facturas', [FacturasController::class,'create']);
Route::get('/facturas', [FacturasController::class,'obtain']);

Route::get('/facturas/{idShow}', [FacturasController::class,'show']);
Route::put('/facturas/{idEdit}', [FacturasController::class,'modify']);
Route::delete('/facturas/{idDelete}', [FacturasController::class,'delete']);

