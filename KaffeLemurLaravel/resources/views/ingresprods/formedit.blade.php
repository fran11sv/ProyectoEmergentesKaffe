<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="id_producto">Producto</label>
            <br />
            <select class="form-select" name="id_producto" aria-label="Default select example">
                @foreach ($productos as $producto)
                    @if ($producto['_id']== $ingresprods->id_producto)
                    <option value="{{ $producto['_id'] }}" selected>{{ $producto['nombre_prod'] }}</option>
                    @else
                    <option value="{{ $producto['_id'] }}">{{ $producto['nombre_prod'] }}</option>
                    @endif
                    
                @endforeach

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="id_ingrediente">Ingrediente</label>
            <br />
            <select class="form-select" name="id_ingrediente" aria-label="Default select example">
                @foreach ($ingredientes as $ingrediente)
                    @if ($ingrediente['_id']== $ingresprods->id_ingrediente )
                    <option value="{{ $ingrediente['_id'] }}" selected>{{ $ingrediente['nombre_ingre'] }}</option>
                    @else
                    <option value="{{ $ingrediente['_id'] }}" >{{ $ingrediente['nombre_ingre'] }}</option>
                    @endif
                    
                @endforeach

            </select>
        </div>
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{ route('ingresprods.index') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
</div>