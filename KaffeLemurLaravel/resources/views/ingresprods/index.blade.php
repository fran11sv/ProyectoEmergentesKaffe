@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Ingredientes del Producto') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('ingresprods.create')}}">Agregar Ingrediente al Producto </a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Ingrediente</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($ingresprods as $ingresprod)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $ingresprod->obtener_producto->nombre_prod  }}</td>
                            <td>{{ $ingresprod->obtener_ingrediente->nombre_ingre }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/ingresprods/'.$ingresprod->id.'/edit') }}">Editar</a>

                                <form action="{{ url('ingresprods/'.$ingresprod->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este producto?')" value="Eliminar"></input>
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
