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


Route::get('/invoices',[ App\Http\Controllers\InvoiceController::class,'index'])->name('invoices.index');
Route::get('/invoices/show/{invoice}',[ App\Http\Controllers\InvoiceController::class,'show'])->name('invoices.index');
Route::get('/invoices/rejected/{invoice}',[ App\Http\Controllers\InvoiceController::class,'EntityRejected'])->name('invoices.rejected');
Route::get('/invoices/approved/{invoice}',[ App\Http\Controllers\InvoiceController::class,'EntityApproved'])->name('invoices.approved');
