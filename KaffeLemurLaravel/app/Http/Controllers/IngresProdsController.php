<?php

namespace App\Http\Controllers;

use App\Models\IngresProds;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IngresProdsController extends Controller
{
    public function index()
    {
    //
    $data['ingresprods']=IngresProds::paginate(15);
    return view('ingresprods.index', $data);
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
 $datosIngresProds = $request->except('_token','saveitem');
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
 return view('ingresprods.create');
 }

 /**
 * Show the form for editing the specified resource.
 *
 * @param \App\IngresProds $ingresprods
 * @return \Illuminate\Http\Response
 */
public function edit($id) {
    $ingresprods = IngresProds::findOrFail($id);
    return view('ingresprods.edit', compact('ingresprods'));
    }
   /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\IngresProds $categorias
    * @return \Illuminate\Http\Response
    */ public function update(Request $request, $id)
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
