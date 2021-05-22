<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAppsControllerProductos;
use App\Http\Controllers\ApiAppsControllerMarcas;
use App\Http\Controllers\CategoryaController;
use App\Http\Controllers\ApiAppsControllerCategorias;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetallesVentaController;

use App\Models\Categoria;


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

/* 
rutas para catalogos de la api
 */
 // Route::get('marcas', [ApiAppsController::class, 'marcas']);
 Route::middleware('auth:api')->group(function(){


 });

Route::post('categoriaadd', function (Request $request) {
  $marca= $request->nombre;
  return redirect()->route('categoria.add');
});

    Route::post('addmarca', function () {
    return redirect()->route('categoria.add');

   
    });

    Route::post('categoriasstore', function (Request $request) {
      $categoria=$request->categoria;  
      return response()->json($request->categoria,200);
    });
     
    
     


    Route::get('categorias', [CategoryaController::class, 'index']);
    Route::post('categorias', [CategoryaController::class,'store']);
    Route::get('edit/{model}', [CombustibleController::class, 'show']);
    Route::delete('categoria', [ApiAppsControllerCategorias::class,'store']);
    Route::get('categoria', [ApiAppsControllerCategorias::class,'store']);
    Route::patch('categoria', [ApiAppsControllerCategorias::class,'store']);







    

  
    Route::post('productos', [ApiAppsControllerProductos::class, 'store']);      
    Route::get('productos', [ApiAppsControllerProductos::class, 'index']);
    Route::get('add', [ApiAppsControllerProductos::class, 'add'])->name('productoadd');
    
    Route::get('inventario', [InventarioController::class, 'index']);
    Route::post('inventario', [InventarioController::class, 'store']);

    Route::get('ventas', [VentaController::class, 'index']);
    Route::post('ventas', [VentaController::class, 'store']);
    
    Route::get('detalles', [DetallesVentaController::class, 'index']);
    Route::post('detalles', [DetallesVentaController::class, 'store']);


    //Route::get('categorias', [ApiAppsController::class, 'categorias']);
    Route::get('marcas', [ApiAppsControllerMarcas::class, 'index'])->name('marcas');
    Route::post('', [ApiAppsControllerMarcas::class, 'store'])->name('marca.store');



   
   
