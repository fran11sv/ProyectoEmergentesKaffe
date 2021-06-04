<?php

namespace App\Http\Controllers;

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
}
