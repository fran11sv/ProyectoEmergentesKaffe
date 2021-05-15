<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
 {
 $data['clientes']=Clientes::paginate(15);
 return view('clientes.index', $data);
 /*$productos = Productos::all();
 return view('productos.index', $productos);*/
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
$datosCli = $request->except('_token','saveitem');
Clientes::insert($datosCli);
//return response()->json($dataProducts);
return redirect('clientes/');
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('clientes.create');
}

/**
 * Show the form for editing the specified resource.
 *
 * @param \App\Clientes $clientes
 * @return \Illuminate\Http\Response
 */
public function edit($id) {
    $clientes = Clientes::findOrFail($id);
    return view('clientes.edit', compact('clientes'));
    }
   /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\Clientes $clientes
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
 {
 $clientes = Clientes::findOrFail($id);
 $clientes->update($request->all());
 return redirect('clientes');
 }

 /**
 * Remove the specified resource from storage.
 *
 * @param \App\Clientes $clientes
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
//
Clientes::destroy($id);
return redirect('clientes');
}


 //----------------------------------------From end--------------------------------------------------
    /**
     * Errors:
     * 404: No encontro nombre
     */

    public function Login(Request $request)
    {
        $ClienteDatos = Clientes::select('*')->where('email_cli', '=', $request->email_cli)->where('contra_cli', '=', $request->contra_cli)->get();;
        //$ClienteDatos = Clientes::where('email_cli', '=', $request->email_cli)where('contra_cli', '=', $request->contra_cli)->get();
        if ($ClienteDatos!= null){
            return json_encode($ClienteDatos,200);
        }else {
            return response("NO WEY", 404);
        }   
    }

    //GET Obtiene todos los Clientes
    public function AllClientes(){
        $Clientes = Clientes::all();
        return json_encode($Clientes);
    }

    //POST Crea nuevo nombre
    public function CrearCliente(Request $request){
        $nuevo = Clientes::create([
            'nombre_cli' => $request->nombre_cli,
            'apellido_cli' => $request->apellido_cli,
            'email_cli' => $request->email_cli,
            'usuario_cli' => $request->usuario_cli,
            'contra_cli' => $request->contra_cli,
            'telefono_cli' => $request->telefono_cli,
            'direccion_cli' => $request->direccion_cli
        ]);

        return json_encode($nuevo);
    }

    //PUT Actualiza nombre existente
    public function ActualizarCliente(Request $request){
        $ClienteDatos = Clientes::where('_id', '=', $request->_id)->first();

        if ($ClienteDatos != null) {
            $ClienteDatos->nombre_cli = $request->nombre_cli;
            $ClienteDatos->apellido_cli = $request->apellido_cli;
            $ClienteDatos->email_cli = $request->email_cli;
            $ClienteDatos->usuario_cli = $request->usuario_cli;
            $ClienteDatos->contra_cli = $request->contra_cli;
            $ClienteDatos->telefono_cli = $request->telefono_cli;
            $ClienteDatos->direccion_cli = $request->direccion_cli;
            $ClienteDatos->save();
            return $ClienteDatos;
        }else{
            return response("No se encontró", 404);
        }
    }

    //DELETE Elimina nombre 
    public function EliminarCliente($id){
        $ClienteDatos = Clientes::where('_id', '=', $id)->first();
        $ClienteDatos->delete();
        return response("Eliminado", 200);
    }

    

}
