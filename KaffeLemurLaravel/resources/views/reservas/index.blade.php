@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive-md">
                <div class="card">
                    <div class="card-header">{{ __('Reservas') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{ route('reservas.create') }}">Agregar
                                Nueva Reserva</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Fecha de reserva</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($countrow = 1)
                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <th scope="row">{{ $countrow++ }}</th>
                                            <td>{{ $reserva->obtener_cliente->nombre_cli  }} {{ $reserva->obtener_cliente->apellido_cli  }}</td>
                                            <td>{{ $reserva->fecha_reserva }}</td>
                                            <td>{{ $reserva->total_reserva }}</td>
                                            <td class="d-flex">
                                                <a class="btn btn-success btn-sm mx-1"
                                                    href="{{ url('/reservas/' . $reserva->id . '/edit') }}">Editar</a>
                                                <form action="{{ url('reservas/' . $reserva->id) }}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input class="btn btn-danger btn-sm mx-1" type="submit"
                                                        onclick="return confirm('¿Desea Eliminar este cliente?')"
                                                        value="Eliminar"></input>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
