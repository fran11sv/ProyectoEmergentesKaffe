<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
     /**
     * Errors:
     * 404: No encontro nombre
     */

    //GET Obtiene todos los Productos
    public function AllProductos(){
        $Productos = Productos::all();
        return json_encode($Productos);
    }

    //POST Crea nuevo nombre
    public function CrearProducto(Request $request){
        $nuevo = Productos::create([
            'id_categoria' => $request->id_categoria,
            'nombre_prod' => $request->nombre_prod,
            'descripcion_prod' => $request->descripcion_prod,
            'precio_prod' => $request->precio_prod,
            'precio2_prod' => $request->precio2_prod,
            'contra_cli' => $request->contra_cli,
            'estado_prod' => $request->estado_prod
        ]);

        return json_encode($nuevo);
    }

    //PUT Actualiza nombre existente
    public function ActualizarProducto(Request $request){
        $ProductoDatos = Productos::where('_id', '=', $request->_id)->first();

        if ($ProductoDatos != null) {
            $ProductoDatos->nombre_cli = $request->nombre_cli;
            $ProductoDatos->apellido_cli = $request->apellido_cli;
            $ProductoDatos->email_cli = $request->email_cli;
            $ProductoDatos->usuario_cli = $request->usuario_cli;
            $ProductoDatos->contra_cli = $request->contra_cli;
            $ProductoDatos->telefono_cli = $request->telefono_cli;
            $ProductoDatos->direccion_cli = $request->direccion_cli;
            $ProductoDatos->save();
            return $ProductoDatos;
        }else{
            return response("No se encontró", 404);
        }
    }

    //DELETE Elimina nombre 
    public function EliminarProducto($id){
        $ProductoDatos = Productos::where('_id', '=', $id)->first();
        $ProductoDatos->delete();
        return response("Eliminado", 200);
    }
}
