<div class="container-fluid" style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="assets/img/category.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevas categorías de libros, debes de llenar el siguiente formulario para registrar una categoría
        </div>
    </div>
</div>

<!-- NAV DE PESTAÑAS -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#crearCategoria" role="tab" data-toggle="tab">Nuevo Categoria</a>
    </li>
    <li>
        <a href="#listCategoria" role="tab" data-toggle="tab">Listado de Categorias</a>
    </li>
</ul>

<!-- CONTENIDO DE PESTAÑAS -->
<div class="tab-content" style="margin-top: 20px;">
    <!-- Pestaña 1 activa por defecto -->
    <div class="tab-pane active" id="crearCategoria">
        <?php incluirCrearAdministracion('crearCategoria'); ?>
    </div>

    <!-- Pestaña 2 -->
    <div class="tab-pane" id="listCategoria">
        <?php incluirListAdministracion('listCategoria'); ?>
    </div>
</div>

<!-- CODIGO ORIGINAL
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nueva categoría</li>
                <li><a href="listcategory.php">Listado de categorías</a></li>
            </ol>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar una nueva categoría</div>
        <form autocomplete="off">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el código de categoría" required="" pattern="[0-9]{1,20}" maxlength="20" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 20 caracteres">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Código de categoría</label>
                    </div>
                    <div class="group-material">
                        <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de la categoría" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la categoría">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombre</label>
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