<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use App\Models\Sexo;
use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ApiAppsControllerProductos extends Controller
{
    public $rules = [
        
        'nombre'=>['required','string'],
        "categoria_id"=>['required','string'],
        "precio"=>['required','numeric'],
        "costo"=>['required','numeric'],
       
    ];
    public function listas (Request $request){
        $productos=Producto::all();
        $data=[
            'data'=>$productos
        ];
        return response()->json($data,200);
    }
    public function store(Request $request)
    {
        $product=Producto::create($request->all());
        return response()->json($product,200);
    }

    public function barrio()
    {
        return $this->hasOne(
            Barrio::class,
            'id',
            'barrio_id'
        );
    }
    public function colores(Request $request)
    {
        $rows = Color::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('color', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function index()
    {
        $rows = Producto::join('categorias','categoria_id', 
        '=', 'categorias.id')
        ->select('productos.id','productos.producto',
        'categorias.categoria as Categoria',"productos.precio",
        "productos.costo")->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

}
