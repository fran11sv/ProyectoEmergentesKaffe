<div class="container-fluid">
 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="nombre_cli">Nombre del Cliente</label>
 <input type="text" name="nombre_cli" class="form-control formcontrol-sm col-sm-4" id="nombre_cli" placeholder="Nombre del cliente">
 </div>
 </div>
 

<div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="apellido_cli">Apellido del Cliente</label>
 <input type="text" name="apellido_cli" class="form-control formcontrol-sm col-sm-4" id="apellido_cli" placeholder="Apellido del cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="email_cli">Email del Cliente</label>
 <input type="text" name="email_cli" class="form-control formcontrol-sm col-sm-4" id="email_cli" placeholder="Email del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="usuario_cli">Usuario del Cliente</label>
 <input type="text" name="usuario_cli" class="form-control formcontrol-sm col-sm-4" id="usuario_cli" placeholder="Usuario del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="contra_cli">Contraseña del Cliente</label>
 <input type="text" name="contra_cli" class="form-control formcontrol-sm col-sm-4" id="contra_cli" placeholder="Contraseña del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="telefono_cli">Telefono del Cliente</label>
 <input type="text" name="telefono_cli" class="form-control formcontrol-sm col-sm-4" id="telefono_cli" placeholder="Telefono del Cliente">
 </div>
 </div>

 <div class="row">
 <div class="form-group col">
 <label class="col-form-label col-form-labelsm" for="direccion_cli">Direccion del Cliente</label>
 <input type="text" name="direccion_cli" class="form-control formcontrol-sm col-sm-4" id="direccion_cli" placeholder="Direccion del Cliente">
 </div>
 </div>
 

<div class="modal-footer">
 <a href="{{ route('clientes.index') }}" class="link btn btnsecondary">Cancelar</a>
 <input type="submit" name="saveitem" class="btn btnprimary" id="saveitem" value="Guardar"></input>
</div>