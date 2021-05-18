<?php

namespace App\Http\Controllers;

use App\Models\Ingredientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    public function index()
    {
        $data['ingredientes']=Ingredientes::all();
        return view('ingredientes.index', $data);

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
        $datosCats = $request->except('_token','saveitem');
        Ingredientes::insert($datosCats);
        //return response()->json($dataProducts);
        return redirect('ingredientes/');
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredientes.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $ingredientes = Ingredientes::findOrFail($id);
        return view('ingredientes.edit', compact('ingredientes'));
     }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ingredientes = Ingredientes::findOrFail($id);
        $ingredientes->update($request->all());
        return redirect('ingredientes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingredientes $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ingredientes::destroy($id);
        return redirect('ingredientes');
    }



}
