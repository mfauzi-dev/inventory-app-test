<?php

use App\Http\Controllers\InventoryController;
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

Route::get('/', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/store', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/edit/{id}', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/update/{id}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/delete/{id}', [InventoryController::class, 'destroy'])->name('inventory.delete');