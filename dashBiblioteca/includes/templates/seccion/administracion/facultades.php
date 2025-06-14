<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/section.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevas Facultades al sistema, debes de seleccionar los datos en el siguiente formulario para registrar una sección
        </div>
    </div>
</div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#crearFacultad" role="tab" data-toggle="tab">Nueva Facultad</a>
    </li>
    <li>
        <a href="#listFacultad" role="tab" data-toggle="tab">Listado de Facultades</a>
    </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
    <!-- Pestaña 1 activa por defecto -->
    <div class="tab-pane active" id="crearFacultad">
        <?php incluirCrearAdministracion('crearFacultad'); ?>
    </div>

    <!-- Pestaña 2 -->
    <div class="tab-pane" id="listFacultad">
        <?php incluirListAdministracion('listFacultad'); ?>
    </div>
</div>

<!-- CODIGO ORIGINAL

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nueva sección</li>
                <li><a href="listsection.php">Listado de secciones</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar una nueva Facultad</div>
        <form>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="group-material">
                        <span>Año</span>
                        <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el año">
                            <option value="" disabled="" selected="">Selecciona una opción</option>
                            <option value="1° año ">1°</option>
                            <option value="2° año ">2°</option>
                            <option value="3° año ">3°</option>
                        </select>
                    </div>
                    <div class="group-material">
                        <span>Especialidad</span>
                        <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la especialidad">
                            <option value="" disabled="" selected="">Selecciona una opción</option>
                            <option value="Asistente.Ad. ">Asistente Ad.</option>
                            <option value="Contador ">Contador</option>
                            <option value="Electrotécnia ">Electrotécnia</option>
                            <option value="General ">General</option>
                            <option value="Informática ">Informática</option>
                            <option value="Salud ">Salud</option>
                            <option value="M. Automotriz ">M. Automotriz</option>
                        </select>
                    </div>
                    <div class="group-material">
                        <span>Sección</span>
                        <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección">
                            <option value="" disabled="" selected="">Selecciona una opción</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
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