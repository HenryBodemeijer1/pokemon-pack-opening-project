<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/Pokemon/Pokedex', [App\Http\Controllers\PokedexController::class, 'index'])->name('pokedex')->middleware('auth');
Route::get('/Pokemon/Packs', [App\Http\Controllers\PacksController::class, 'index'])->name('packs')->middleware('auth');
Route::get('/Pokemon/Packshow', [App\Http\Controllers\PackShowController::class, 'index'])->name('packshow')->middleware('auth');
Route::resource('storage', App\Http\Controllers\StorageController::class)->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth.basic', 'is_admin'])->group( function (){
    Route::resource('admin/pokemon', App\Http\Controllers\Admin\AdminPokemonController::class);
    Route::resource('admin/pokemonUnlocked', App\Http\Controllers\Admin\AdminPokemonUnlockedController::class);
    Route::resource('admin/user', App\Http\Controllers\Admin\AdminUserController::class);
});

