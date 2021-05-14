<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Errors:
     * 404: No encontro nombre
     */

    public function index()
    {
        //
        $data['categorias']=Categorias::paginate(15);
        return view('categorias.index', $data);
        /*$productos = Productos::all();
        return view('productos.index', $productos);*/

    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
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
        Categorias::insert($datosCats);
        //return response()->json($dataProducts);
        return redirect('categorias/');
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $categorias = Categorias::findOrFail($id);
        return view('categorias.edit', compact('categorias'));
     }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorias = Categorias::findOrFail($id);
        $categorias->update($request->all());
        return redirect('categorias');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Categorias::destroy($id);
        return redirect('categorias');
    }
//-------------------------------------------FRONTEND------------------------------------------------------------


    //GET Obtiene todos los categorias
    public function AllCategorias(){
        $categorias = Categorias::all();
        return json_encode($categorias);
    }

    

    //POST Crea nuevo nombre
    public function CrearCategoria(Request $request){
        $nuevo = Categorias::create([
            'categoria' => $request->categoria
        ]);

        return json_encode($nuevo);
    }

    //PUT Actualiza nombre existente
    public function ActualizarCategoria(Request $request){
        $categoriaDatos = Categorias::where('_id', '=', $request->_id)->first();

        if ($categoriaDatos != null) {
            $categoriaDatos->categoria = $request->categoria;
            $categoriaDatos->save();
            return $categoriaDatos;
        }else{
            return response("No se encontró", 404);
        }
    }

    //DELETE Elimina nombre 
    public function EliminarCategoria($id){
        $categoriaDatos = Categorias::where('_id', '=', $id)->first();
        $categoriaDatos->delete();
        return response("Eliminado", 200);
    }

}
