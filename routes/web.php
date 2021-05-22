<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ApiAppsController;


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
})->middleware('auth');

Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


   
   
Route::middleware('auth')->group(function(){


    Route::prefix('inventario')->group(function(){
        Route::get('', [InventarioController::class, 'index'])->name('inventario');
        Route::get('add', [InventarioController::class, 'add'])->name('inventario.add');
        Route::get('edit/{model}', [InventarioController::class, 'edit'])->name('inventario.edit');
        Route::post('', [InventarioController::class, 'store'])->name('inventario');
        Route::patch('{model}', [InventarioController::class, 'update'])->name('inventario.update');
        Route::delete('{model}', [InventarioController::class, 'destroy'])->name('inventario.delete');
    });

   
    Route::prefix('catalogos')->group(function(){
        Route::prefix('colores')->group(function () {
            Route::get('', [ColorController::class, 'index'])->name('color');
            Route::get('add', [ColorController::class, 'add'])->name('color.add');
            Route::get('edit/{model}', [ColorController::class, 'edit'])->name('color.edit');
            Route::post('', [ColorController::class, 'store'])->name('color.store');
            Route::patch('{model}', [ColorController::class, 'update'])->name('color.update');
            Route::delete('{model}', [ColorController::class, 'destroy'])->name('color.delete');
        });

        Route::prefix('combustible')->group(function () {
            Route::get('', [CombustibleController::class, 'index'])->name('combustible');
            Route::get('add', [CombustibleController::class, 'add'])->name('combustible.add');
            Route::post('', [CombustibleController::class, 'store'])->name('combustible.store');
            Route::delete('{model}', [CombustibleController::class, 'destroy'])->name('combustible.delete');
            Route::get('edit/{model}', [CombustibleController::class, 'show'])->name('combustible.edit');
            Route::patch('{model}', [CombustibleController::class, 'update'])->name('combustible.update');
        });
        
        Route::prefix('catalogos')->group(function () {
            Route::get('combustible', [CatalogosController::class, 'getCombustibles']);
        });
    });
});
