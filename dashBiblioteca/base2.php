<?php 


require 'includes/funciones.php';
incluirTemplate('header');
?> <!-- FIN DE HEADER -->

        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Libro Catalogo</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#catalogoLibro" aria-controls="catalogoLibro" role="tab" data-toggle="tab">Libros</a></li>
                <li role="presentation"><a href="#docentes" aria-controls="docentes" role="tab" data-toggle="tab">Catalogo</a></li>
                <li role="presentation"><a href="#estudiantes" aria-controls="estudiantes" role="tab" data-toggle="tab">Estudiantes</a></li>
                <li role="presentation"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal Administrativo</a></li>

            </ul>
        </div>


            <!-- BODY DINAMICO -->
            <div class="tab-content">
                <!-- catalogoLibroES PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade in active" id="catalogoLibro">
                    <?php incluirSeccionLibroPrest('libro'); ?>
                </div>

                <!--DOCENTES PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="docentes">
                    <?php incluirSeccionRegisrto('docentes'); ?>
                </div>

                <!-- ESTUDIANTES PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="estudiantes">
                    <?php incluirSeccionRegisrto('estudiantes'); ?>
                </div>
                
                <!-- PERSONAL ADMINISTRATIVO PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="personal">
                    <?php incluirSeccionRegisrto('personal'); ?>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
<?php 
incluirTemplate('footer');
?>