<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\DetallesVentaController;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $rows = Venta::join('detalles_ventas','venta_id', '=', 'ventas.id',
        )
        ->select('ventas.id',"detalles_ventas.producto_id")->get();
        $data = [
            'data' => $rows
        ];

        // $rows = DetallesVentaController::query()
        // ->where('detalles_ventas.venta_id',"=","ventas.id")
        // ->join('detalles_ventas','venta_id', '=', 'ventas.id')
        // ->join('detalles_ventas','producto_id', '=', 'productos.id')
        // ->get();
        
        return response()->json($data, 200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta=Venta::create($request->all());
       
        return response()->json($venta,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
