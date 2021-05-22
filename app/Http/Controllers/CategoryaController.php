<?php

namespace App\Http\Controllers;

use App\Models\Categorya;
use Illuminate\Http\Request;

class CategoryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Categorya::all();
        $data=[
            'data'=>$categoria
        ];
        return response()->json($data,200);
        
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
        //
        $categoria=Categorya::create($request->all());
        return response()->json($categoria,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorya  $categorya
     * @return \Illuminate\Http\Response
     */
    public function show(Categorya $categorya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorya  $categorya
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorya $categorya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorya  $categorya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorya $categorya)
    {        //
        $categoria->fill($request->all());
        $categoria->save();
        return response()->json($categoria,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorya  $categorya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorya $categorya)
    {
        //
    }
}
