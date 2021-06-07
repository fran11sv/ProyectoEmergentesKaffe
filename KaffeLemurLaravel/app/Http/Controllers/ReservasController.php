<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Reservas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {

        $datosPro = Reservas::get();
        foreach ($datosPro as $d) {
            $d->obtener_cliente->nombre_cli;
        }
        $datosProd['reservas'] = $datosPro;
        return view('reservas.index', $datosProd);

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
        Reservas::insert($datosProd);
        return redirect('reservas/');
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $clientes = Clientes::all();
        return view('reservas.create', compact('clientes'));
    }

    /**
 * Show the form for editing the specified resource.
 *
 * @param \App\Reservas $reservas
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $reservas = Reservas::findOrFail($id);
    $clientes = Clientes::all();
    return view('reservas.edit', compact('reservas'), compact('clientes'));
}
/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param \App\Models\Reservas $reservas
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $reservas = Reservas::findOrFail($id);
    $reservas->update($request->all());
    return redirect('reservas');
}

/**
     * Remove the specified resource from storage.
     *
     * @param \App\Reservas $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//
        Reservas::destroy($id);
        return redirect('reservas');
    }

}

