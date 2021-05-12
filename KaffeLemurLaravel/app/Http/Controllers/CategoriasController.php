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
