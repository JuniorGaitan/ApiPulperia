<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class  ApiAppsControllerCategorias extends Controller
{

    public $rules = [
        'Categoria' => ['required','string']
    ];


    // public function index (Request $request){
    //     $categoria=Categoria::all();
    //     $data=[
    //         'data'=>$categoria
    //     ];
    //     return response()->json($data,200);
    // }
    public function index (){
            $categoria=Categoria::all();
            $data=[
                'data'=>$categoria
            ];
            return response()->json($data,200);
        }
    public function add(){
        return view('catalogos.colores.add');
      
    }

    // Route::post('articles', function(Request $request) {
    //     return Categoria::create($request->all);
    // });
        
    public function store(Request $request){
        $categoria=Categoria::create($request->all());
        return response()->json($categoria,200);
    }
}
