<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos docentes. Para registrar un docente debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de docentes registrados <br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el docente del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.

                </div>
            </div>
        </div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active">
    <a href="#crearDocente" role="tab" data-toggle="tab">Nuevo Docente</a>
  </li>
  <li>
    <a href="#listDocente" role="tab" data-toggle="tab">Listado de Docentes</a>
  </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
  <!-- Pestaña 1 activa por defecto -->
  <div class="tab-pane active" id="crearDocente">
    <?php incluirCrearUsuarios('crearDocente'); ?>
  </div>

  <!-- Pestaña 2 -->
  <div class="tab-pane" id="listDocente">
    <?php incluirListUsuarios('listDocente'); ?>
  </div>
</div>



<!-- CODIGO ORIGINAL
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo docente</li>
                      <li><a href="listteacher.php">Listado de docentes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo docente</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de DUI del docente" pattern="[0-9-]{1,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente números y guiones, 10 dígitos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número de DUI</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del docente" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del docente, solamente letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del docente" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del docente, solamente letras">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del docente" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí la especialidad del docente" required="" maxlength="40" data-toggle="tooltip" data-placement="top" title="Especialidad del docente">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Especialidad</label>
                            </div>
                           <legend>Turno y Sección encargada</legend>
                            <div class="group-material">
                                <span>Sección encargada</span>
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección encargada del docente">
                                    <option value="" disabled="" selected="">Selecciona una sección</option>
                                    <option value="Seccion">Sección</option>
                                    <option value="Seccion">Sección</option>
                                    <option value="Seccion">Sección</option>
                                </select>
                            </div>
                            <div class="group-material">
                                <span>Turno</span>
                                <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el turno que labora el docente">
                                    <option value="Mañana">Mañana</option>
                                    <option value="Tarde">Tarde</option>
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