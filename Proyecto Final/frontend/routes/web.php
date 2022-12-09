<?php

use App\Http\Livewire\Clientes;
use App\Http\Livewire\Detalles;
use App\Http\Livewire\Facturas;
use App\Http\Livewire\ClientesEdit;
use App\Http\Livewire\ClientesShow;
use App\Http\Livewire\DetallesEdit;
use App\Http\Livewire\DetallesShow;
use App\Http\Livewire\FacturasEdit;
use App\Http\Livewire\FacturasShow;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;

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
    return view('welcome');
});

Route::get('/',[appController::class, 'assetView']);
Route::get('/clientes',Clientes::class);
Route::get('/facturas',Facturas::class);
Route::get('/detalles',Detalles::class);

Route::get('/clientes/{id}/show', ClientesShow::class);
Route::get('/clientes/{id}/edit', ClientesEdit::class);

Route::get('/facturas/{id}/show', FacturasShow::class);
Route::get('/facturas/{id}/edit', FacturasEdit::class);

Route::get('/detalles/{id}/show', DetallesShow::class);
Route::get('/detalles/{id}/edit', DetallesEdit::class);
