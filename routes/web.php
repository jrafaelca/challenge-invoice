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

Route::get('/total-invoice', [\App\Http\Controllers\HomeController::class, 'totalInvoice']);
Route::get('/invoice-products-greater-hundred', [\App\Http\Controllers\HomeController::class, 'invoiceProductsGreaterHundred']);
Route::get('/products-total-greater-one-million', [\App\Http\Controllers\HomeController::class, 'productsTotalGreaterOneMillion']);
Route::get('/insert-product', [\App\Http\Controllers\ProductController::class, '__invoke']);
