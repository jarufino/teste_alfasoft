<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/show-contact/{contact}', [ContactController::class, 'show'])->name('contact.show');
Route::get('/create-contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/store-contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/edit-contact/{contact}', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/update-contact/{contact}', [ContactController::class,'update'])->name('contact.update');
Route::delete('/destroy-contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');