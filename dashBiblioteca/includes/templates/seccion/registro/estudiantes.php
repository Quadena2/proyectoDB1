<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevos estudiantes, para poder registrar un estudiante deberás de llenar todos los campos del siguiente formulario <br>
                    <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.

        </div>
    </div>
</div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active">
    <a href="#crearEstudiante" role="tab" data-toggle="tab">Nuevo Estudiante</a>
  </li>
  <li>
    <a href="#listEstudiante" role="tab" data-toggle="tab">Listado de Estudiantes</a>
  </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
  <!-- Pestaña 1 activa por defecto -->
  <div class="tab-pane active" id="crearEstudiante">
    <?php incluirCrearUsuarios('crearEstudiante'); ?>
  </div>

  <!-- Pestaña 2 -->
  <div class="tab-pane" id="listEstudiante">
    <?php incluirListUsuarios('listEstudiante'); ?>
  </div>
</div>

<!-- CODIGO ORIGINAL
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nuevo estudiante</li>
                <li><a href="liststudent.php">Listado de estudiantes</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Registrar un nuevo estudiante</div>
        <form autocomplete="off">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <legend>Datos del estudiante</legend>
                    <br><br>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el NIE del alumno" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="NIE de estudiante">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>NIE</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del alumno" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombres del estudiante">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombres</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del alumno" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellidos del estudiante">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Apellidos</label>
                    </div>
                    <div class="group-material">
                        <span>Sección</span>
                        <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige la sección a la que pertenece el alumno">
                            <option value="" disabled="" selected="">Selecciona una sección</option>
                            <option value="seccion">Sección</option>
                        </select>
                    </div>
                    <legend>Datos del encargado</legend>
                    <br><br>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Parentesco" required="" pattern="[a-zA-ZéíóúáñÑ ]{1,30}" maxlength="30" data-toggle="tooltip" data-placement="top" title="Parentesco">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Parentesco</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general check-representative" placeholder="Escribe aquí el número de DUI del encargado" pattern="[0-9-]{1,10}" required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solamente números y guiones, 10 dígitos">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Número de DUI del encargado</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Nombre del encargado" required="" pattern="[a-zA-ZéíóúáñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombre del encargado del estudiante">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombre completo del encargado</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Teléfono" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Teléfono</label>
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