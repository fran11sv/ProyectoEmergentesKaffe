<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombre_ingre">Ingrediente</label>
            <input type="text" name="nombre_ingre" value="{{ $ingredientes->nombre_ingre }}" class="form-control form-control-sm col-sm-4" id="nombre_ingre" placeholder="Ingrediente">
        </div>
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{ route('ingredientes.index') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
</div>
