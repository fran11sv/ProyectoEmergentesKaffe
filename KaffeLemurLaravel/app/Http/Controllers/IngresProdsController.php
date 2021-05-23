<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IngresProds;
use App\Models\Productos;
use App\Models\Ingredientes;
use Illuminate\Http\Request;

class IngresProdsController extends Controller
{
    public function index()
    {
        $datosIngresProds = IngresProds::get();
        foreach ($datosIngresProds as $d) {
            $d->obtener_producto->nombre_prod;
            $d->obtener_ingrediente->nombre_ingre;
        }
        $datosIngreProd['ingresprods'] = $datosIngresProds;
        return view('ingresprods.index', $datosIngreProd);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosIngresProds = $request->except('_token', 'saveitem');
        IngresProds::insert($datosIngresProds);
        //return response()->json($dataProducts);
        return redirect('ingresprods/');
    }
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $productos = Productos::all();
        $ingredientes = Ingredientes::all();
        return view('ingresprods.create', compact('productos'), compact('ingredientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\IngresProds $ingresprods
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresprods = IngresProds::findOrFail($id);
        $productos = Productos::all();
        $ingredientes = Ingredientes::all();
        return view('ingresprods.edit', compact('ingresprods'), compact('productos', 'ingredientes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\IngresProds $categorias
     * @return \Illuminate\Http\Response
     */public function update(Request $request, $id)
    {
        $ingresprods = IngresProds::findOrFail($id);
        $ingresprods->update($request->all());
        return redirect('ingresprods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\IngresProds $ingresprods
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        IngresProds::destroy($id);
        return redirect('ingresprods');
    }

}
