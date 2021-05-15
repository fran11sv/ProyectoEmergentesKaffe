<div class="container-fluid">

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="id_categoria">Categoria</label>
 <input type="text" name="id_categoria" class="form-control form-control-sm col-sm-4" id="id_categoria" placeholder="Nombre del cliente">
 </div>
 </div>
 
 <select class="form-select" name="id_categoria" aria-label="Default select example">
  @foreach($categorias as $categoria)
  <option value="{{$categoria['_id']}}"> {{$categoria['categoria']}} </option>
  @endforeach
  
</select>

<div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="nombre_prod">Producto</label>
 <input type="text" name="nombre_prod" class="form-control form-control-sm col-sm-4" id="nombre_prod" placeholder="Apellido del cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="descripcion_prod">Descripcion</label>
 <input type="text" name="descripcion_prod" class="form-control form-control-sm col-sm-4" id="descripcion_prod" placeholder="Email del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="precio_prod">Precio de 8 Oz</label>
 <input type="text" name="precio_prod" class="form-control form-control-sm col-sm-4" id="precio_prod" placeholder="Usuario del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="precio2_prod">Precio de 12 Oz</label>
 <input type="text" name="precio2_prod" class="form-control form-control-sm col-sm-4" id="precio2_prod" placeholder="Contraseña del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-label-sm" for="estado_prod">Estado</label>
 <input type="text" name="estado_prod" class="form-control form-control-sm col-sm-4" id="estado_prod" placeholder="Telefono del Cliente">
 </div>
 </div>
 

<div class="modal-footer">
 <a href="{{ route('productos.index') }}" class="link btn btn-secondary">Cancelar</a>
 <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
</div>