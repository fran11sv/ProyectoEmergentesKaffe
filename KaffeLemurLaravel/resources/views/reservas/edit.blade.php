@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Reservas') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/reservas/' . $reservas->id) }}">
                            @csrf
                            {{ method_field('PUT') }}
                            @include('reservas.formedit')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
