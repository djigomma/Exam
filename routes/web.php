<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/etudiant/create', function () {
//     return view('etudiant.create');
// });


Route::get('/', [App\Http\Controllers\EtudiantController::class, 'index'])->name('etudiant.index');
Route::post('/', [EtudiantController::class, 'store'])->name('ajout');

Route::get('/etudiant', App\Http\Livewire\Etudiant\Index::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
