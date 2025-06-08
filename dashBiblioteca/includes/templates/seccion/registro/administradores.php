<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevos administradores del sistema, debes de llenar todos los campos del siguiente formulario para registrar un administrador
        </div>
    </div>
</div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active">
    <a href="#crearAdmin" role="tab" data-toggle="tab">Nuevo Administrador</a>
  </li>
  <li>
    <a href="#listadmin" role="tab" data-toggle="tab">Listado de Administradores</a>
  </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
  <!-- Pestaña 1 activa por defecto -->
  <div class="tab-pane active" id="crearAdmin">
    <?php incluirCrearUsuarios('crearAdmin'); ?>
  </div>

  <!-- Pestaña 2 -->
  <div class="tab-pane" id="listadmin">
    <?php incluirListUsuarios('listadmin'); ?>
  </div>
</div>



 <!-- INICIO DE PRUEBAS 
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                               <li class="active"> <a href="#crearAdmin"></a> Nuevo administrador</li>  
                <li role="crearAdmin" class="active"><a href="#crearAdmin" aria-controls="crearAdmin" role="tab" data-toggle="tab">Nuevo Administrador</a></li>

                <li role="listadmin"><a href="#listadmin" aria-controls="listadmin" role="tab" data-toggle="tab">Listado de Administradores</a></li>
                              <li><a href="#listadmin">Listado de administradores</a></li>  
            </ol>
        </div>
    </div>
</div>

-->

<!-- INICIO DE PRUEBAS -->


<!-- FIN DE PRUEBAS-->

<!-- CODIGO ORIGINAL
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo administrador</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre completo" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del administrador">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre completo</label>
                            </div>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de usuario</label>
                           </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="E-mail"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del administrador">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                           <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Repite la contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Repetir contraseña</label>
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
CODIGO ORIGINAL -->