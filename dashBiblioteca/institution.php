<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?> <!-- FIN DE HEADER -->

        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Institución</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#institucion" aria-controls="institucion" role="tab" data-toggle="tab">Institucion</a></li>
                <li role="presentation"><a href="#proveedores" aria-controls="proveedores" role="tab" data-toggle="tab">Proveedores</a></li>
                <li role="presentation"><a href="#categorias" aria-controls="categorias" role="tab" data-toggle="tab">Categorias</a></li>
                <li role="presentation"><a href="#secciones" aria-controls="secciones" role="tab" data-toggle="tab">Secciones</a></li>

            </ul>
        </div>


            <!-- BODY DINAMICO -->
            <div class="tab-content">
                <!-- INSTITUCION PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade in active" id="institucion">
                    <?php incluirSeccionAdministracion('institucion'); ?>
                </div>

                <!--PROVEEODORES PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="proveedores">
                    <?php incluirSeccionAdministracion('proveedores'); ?>
                </div>

                <!-- CATEGORIAS PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="categorias">
                    <?php incluirSeccionAdministracion('categorias'); ?>
                </div>
                
                <!-- SECCIONES PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="secciones">
                    <?php incluirSeccionAdministracion('secciones'); ?>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
<?php 
incluirTemplate('footer');
?>