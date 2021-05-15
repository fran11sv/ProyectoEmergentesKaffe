<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {

        $datosPro = Productos::get();
        foreach ($datosPro as $d) {
            $d->obtener_categoria->categoria;
        }
        $datosProd['productos'] = $datosPro;
        return view('productos.index', $datosProd);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProd = $request->except('_token', 'saveitem');
        Productos::insert($datosProd);
        return redirect('productos/');
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $categorias = Categorias::all();
        return view('productos.create', compact('categorias'));
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param \App\Productos $productos
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);
        $categorias = Categorias::all();
        return view('productos.edit', compact('productos'), compact('categorias'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = Productos::findOrFail($id);
        $productos->update($request->all());
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Productos $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//
        Productos::destroy($id);
        return redirect('productos');
    }
//---------------------------------------FRONTEND----------------------------------------------------------------
    /**
     * Errors:
     * 404: No encontro nombre
     */

    //GET Obtiene todos los Productos
    public function AllProductos()
    {
        $Productos = Productos::all();
        return json_encode($Productos);
    }

    //POST Crea nuevo nombre
    public function CrearProducto(Request $request)
    {
        $nuevo = Productos::create([
            'id_categoria' => $request->id_categoria,
            'nombre_prod' => $request->nombre_prod,
            'descripcion_prod' => $request->descripcion_prod,
            'precio_prod' => $request->precio_prod,
            'precio2_prod' => $request->precio2_prod,
            'contra_cli' => $request->contra_cli,
            'estado_prod' => $request->estado_prod,
        ]);

        return json_encode($nuevo);
    }

    //PUT Actualiza nombre existente
    public function ActualizarProducto(Request $request)
    {
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
        } else {
            return response("No se encontró", 404);
        }
    }

    //DELETE Elimina nombre
    public function EliminarProducto($id)
    {
        $ProductoDatos = Productos::where('_id', '=', $id)->first();
        $ProductoDatos->delete();
        return response("Eliminado", 200);
    }
}
