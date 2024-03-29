@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive-md">
                <div class="card">
                    <div class="card-header">{{ __('Productos') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{ route('productos.create') }}">Agregar
                                Nuevo Producto</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio 8 Oz</th>
                                    <th scope="col">Precio 12 Oz</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($countrow = 1)
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <th scope="row">{{ $countrow++ }}</th>
                                            <td>{{ $producto->obtener_categoria->nombre_cat }}</td>
                                            <td>{{ $producto->nombre_prod }}</td>
                                            <td>{{ $producto->descripcion_prod }}</td>
                                            <td>$ {{ $producto->precio_prod }}</td>
                                            <td>$ {{ $producto->precio2_prod }}</td>
                                            <td>{{ $producto->estado_prod }}</td>
                                            <td class="d-flex">
                                                <a class="btn btn-success btn-sm mx-1"
                                                    href="{{ url('/productos/' . $producto->id . '/edit') }}">Editar</a>
                                                <form action="{{ url('productos/' . $producto->id) }}" method="post">
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
