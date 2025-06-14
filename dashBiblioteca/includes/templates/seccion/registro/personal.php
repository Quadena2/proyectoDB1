<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevo personal administrativo. Para registrar el personal administrativo debes de llenar todos los campos del siguiente formulario. <br>
            <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el personal administrativo del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.

        </div>
    </div>
</div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#crearPersonal" role="tab" data-toggle="tab">Nuevo Personal Ad.</a>
    </li>
    <li>
        <a href="#listPersonal" role="tab" data-toggle="tab">Listado de Personal Ad.</a>
    </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
    <!-- Pestaña 1 activa por defecto -->
    <div class="tab-pane active" id="crearPersonal">
        <?php incluirCrearUsuarios('crearPersonal'); ?>
    </div>

    <!-- Pestaña 2 -->
    <div class="tab-pane" id="listPersonal">
        <?php incluirListUsuarios('listPersonal'); ?>
    </div>
</div>

<!-- CODIGO ORIGINAL

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nuevo personal ad.</li>
                <li><a href="listpersonal.php">Listado de personal ad.</a></li>
            </ol>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Registrar nuevo personal administrativo</div>
        <form autocomplete="off">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de DUI del personal administrativo" pattern="[0-9-]{1,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente números y guiones, 10 dígitos">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Número de DUI</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del personal administrativo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del personal administrativo, solamente letras">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombres</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del personal administrativo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del personal administrativo, solamente letras">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Apellidos</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del personal administrativo" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Teléfono</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el cargo del personal administrativo" required="" maxlength="30" data-toggle="tooltip" data-placement="top" title="Cargo del personal administrativo">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Cargo</label>
                    </div>
                    <p class="text-center">
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
-->