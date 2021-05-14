@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-6">
 <div class="card">
 <div class="card-header">{{ __('Clientes') }}</div>
 <div class="card-body">
 <form method = "post" action = "{{ url('/clientes/'.$clientes->id)}}">
 @csrf
{{ method_field('PUT') }}
 @include('clientes.formedit')
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection
