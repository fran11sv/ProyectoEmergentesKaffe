<div class="container-fluid">
    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="nombre_cli">Nombre del Cliente</label>
            <input type="text" name="nombre_cli" value="{{ $clientes->nombre_cli }}"
                class="form-control form-control-sm col-sm-4" id="nombre_cli" placeholder="Nombres">
        </div>
    </div>


    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="apellido_cli">Apellido del Cliente</label>
            <input type="text" name="apellido_cli" value="{{ $clientes->apellido_cli }}"
                class="form-control form-control-sm col-sm-4" id="apellido_cli" placeholder="Apellidos">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="email_cli">Email del Cliente</label>
            <input type="text" name="email_cli" value="{{ $clientes->email_cli }}"
                class="form-control form-control-sm col-sm-4" id="email_cli" placeholder="Email">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="usuario_cli">Usuario del Cliente</label>
            <input type="text" name="usuario_cli" value="{{ $clientes->usuario_cli }}"
                class="form-control form-control-sm col-sm-4" id="usuario_cli" placeholder="Usuario">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="contra_cli">Contraseña del Cliente</label>
            <input type="text" name="contra_cli" value="{{ $clientes->contra_cli }}"
                class="form-control form-control-sm col-sm-4" id="contra_cli" placeholder="Contraseña">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="telefono_cli">Telefono del Cliente</label>
            <input type="text" name="telefono_cli" value="{{ $clientes->telefono_cli }}"
                class="form-control form-control-sm col-sm-4" id="telefono_cli" placeholder="Telefono">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label class="col-form-label col-form-label-sm" for="direccion_cli">Direccion del Cliente</label>
            <input type="text" name="direccion_cli" value="{{ $clientes->direccion_cli }}"
                class="form-control form-control-sm col-sm-4" id="direccion_cli" placeholder="Direccion">
        </div>
    </div>


    <div class="modal-footer">
        <a href="{{ route('clientes.index') }}" class="link btn btn-secondary">Cancelar</a>
        <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar">
    </div>
