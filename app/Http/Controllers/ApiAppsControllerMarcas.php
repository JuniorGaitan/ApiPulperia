<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use Illuminate\Http\Request;

class ApiAppsControllerMarcas extends Controller
{


    public function index (Request $request){
        $marca=Marca::all();
        $data=[
            'data'=>$marca
        ];
        return response()->json($data,200);
    }
    
    public function store(Request $request){
        $marca=Marca::query()->create($request->all());
        return redirect()->route('marcas');
    }
}
