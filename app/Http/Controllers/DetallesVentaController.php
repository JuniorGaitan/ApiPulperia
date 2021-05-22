<?php

namespace App\Http\Controllers;

use App\Models\DetallesVenta;
use Illuminate\Http\Request;

class DetallesVentaController extends Controller
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
    public function index(Request $request)
    {
       $rows = DetallesVenta::join('productos','producto_id', '=', 'productos.id',
       )
         ->select('detalles_ventas.id',"productos.precio","productos.producto",'detalles_ventas.cantidad')->get();
         $data = [
             'data' => $rows
         ]; 
        
        // return response()->json($data, 200);

    //     $rows = DetallesVenta::query()
    //     ->when($request->buscar, function ($query) use ($request) {
    //         $query->where('venta_id', '=', $buscar,
    //     );
    //     })
    //     ->get();
    // $data = [
    //     'data' => $rows
    // ];
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
        $product=DetallesVenta::create($request->all());
        return response()->json($product,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function show(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesVenta $detallesVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallesVenta  $detallesVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallesVenta $detallesVenta)
    {
        //
    }
}
