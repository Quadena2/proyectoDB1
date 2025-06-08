<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<div class="container">

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">Sistema bibliotecario <small>Libro y Catalogo</small></h1>
        </div>
    </div>
    <div class="container-fluid">

        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#libro" aria-controls="libro" role="tab" data-toggle="tab">Añadir libro</a></li>
            <li role="presentation"><a href="#catalogo" aria-controls="catalogo" role="tab" data-toggle="tab">Catalogo</a></li>

        </ul>
    </div>


    <!-- BODY DINAMICO -->
    <div class="tab-content">
        <!-- libro pestaña -->
        <div role="tabpanel" class="tab-pane fade in active" id="libro">
            <?php incluirSeccionLibroPrest('libro'); ?>
        </div>

        <!-- catalogo pestaña -->
        <div role="tabpanel" class="tab-pane fade" id="catalogo">
            <?php incluirSeccionLibroPrest('catalogo'); ?>
        </div>

    </div>
</div>
<?php
incluirTemplate('footer');
?>