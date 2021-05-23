@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingredientes del Producto') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('ingresprods.store')}}">
                        @csrf
                        @include('ingresprods.formingresprods')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection