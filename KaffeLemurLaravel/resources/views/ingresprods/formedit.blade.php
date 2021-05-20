<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="id_producto">Id producto</label>
            <input type="text" name="id_producto" value="{{ $ingresprods->id_producto }}" class="form-control form-control-sm col-sm-4" id="id_producto" placeholder="Id producto">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="id_ingrediente">Id ingrediente</label>
            <input type="text" name="id_ingrediente" value="{{ $ingresprods->id_ingrediente }}" class="form-control form-control-sm col-sm-4" id="id_ingrediente" placeholder="Id ingrediente">
        </div>
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{ route('categorias.index') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
</div>