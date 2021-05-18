<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombre_cat">Categoria</label>
            <input type="text" name="nombre_cat" value="{{ $categorias->nombre_cat }}" class="form-control form-control-sm col-sm-4" id="nombre_cat" placeholder="Categoria">
        </div>
    </div>
    
</div>
<div class="modal-footer">
    <a href="{{ route('categorias.index') }}" class="link btn btn-secondary">Cancelar</a>
    <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
</div>