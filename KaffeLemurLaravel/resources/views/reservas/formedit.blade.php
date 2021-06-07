<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="id_cli">Cliente</label>
            <br />
            <select class="form-select col-sm-4" name="id_cli" aria-label="Default select example" >
                @foreach ($clientes as $cliente)
                    @if($cliente['_id'] == $reservas->id_cli)
                        <option value="{{ $cliente['_id'] }}" selected> {{ $cliente['nombre_cli'] }} {{ $cliente['apellido_cli'] }} </option>                       
                    @else
                    <option value="{{ $cliente['_id'] }}"> {{ $cliente['nombre_cli'] }} {{ $cliente['apellido_cli'] }} </option>                  
                    @endif
                @endforeach
            </select>
        </div>
    </div>



    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="fecha_reserva">Fecha de Reserva</label>
            <input type="date" name="fecha_reserva" value="{{ $reservas->fecha_reserva }}" class="form-control form-control-sm col-sm-4" id="fecha_reserva" placeholder="Fecha de reserva">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="total_reserva">Total</label>
            <input type="number" name="total_reserva" value="{{ $reservas->total_reserva }}" class="form-control form-control-sm col-sm-4"
                id="total_reserva" placeholder="total" min="0" step="0.5" maxlength="6">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="concepto">Concepto</label>
            <textarea  type="text" name="concepto" value="{{ $reservas->concepto }}" class="form-control form-control-sm col-sm-12" id="concepto" placeholder="concepto" rows="4">{{ $reservas->concepto }}</textarea>
        </div>
    </div>

    
</div>
<div class="modal-footer">
    <a href="{{ route('reservas.index') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
</div>
