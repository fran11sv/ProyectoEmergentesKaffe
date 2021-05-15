@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="table-responsive-md">
 <div class="card">
 <div class="card-header">{{ __('Clientes') }}</div>
 <div class="row justify-content-start"> <div class="col-md-auto"><a class="btn btnprimary" href="{{route('clientes.create')}}">Agregar Nuevo Cliente</a>
 </div>
 </div>
 <div class="card-body">
 <table class="table table-striped">
 <thead class="thead-dark">
 <tr>
<th scope="col">Item</th>
 <th scope="col">Nombre</th>
 <th scope="col">Apellido</th>
 <th scope="col">Email</th>
 <th scope="col">Usuario</th>
 <th scope="col">Contraseña</th>
 <th scope="col">Telefono</th>
 <th scope="col">Direccion</th>
 <th scope="col">Acciones</th>
 </tr>
 </thead>
<tbody>
@php($countrow=1)
@foreach($clientes as $cliente)
 <tr>
 <th scope="row">{{$countrow++}}</th>
 <td>{{ $cliente->nombre_cli }}</td>
 <td>{{ $cliente->apellido_cli }}</td>
 <td>{{ $cliente->email_cli }}</td>
 <td>{{ $cliente->usuario_cli }}</td>
 <td>{{ $cliente->contra_cli }}</td>
 <td>{{ $cliente->telefono_cli }}</td>
 <td>{{ $cliente->direccion_cli }}</td>
 <td class="d-flex">
 <a class="btn btn-success btn-sm mx1" href="{{ url('/clientes/'.$cliente->id.'/edit') }}">Editar</a>
 <form action="{{ url('clientes/'.$cliente->id) }}" method="post">
 @csrf
{{ method_field('DELETE') }}
 <input class="btn btn-danger btn-sm mx1" type="submit" onclick="return confirm('¿Desea Eliminar este cliente?')"
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