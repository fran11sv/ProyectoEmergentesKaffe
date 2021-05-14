@extends('layouts.app')
@section('content')
<div class="container"> <div class="row justify-content-center">
 <div class="col-md-6">
 <div class="card">
 <div class="card-header">{{ __('Clientes') }}</div>
 <div class="card-body">
 <form method = "post" action = "{{ route('clientes.store')}}">
 @csrf
@include('clientes.formclientes')
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection