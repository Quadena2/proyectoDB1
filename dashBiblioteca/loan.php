<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?> <!-- FIN DE HEADER -->

        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Préstamos y devoluciones</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#prestamos" aria-controls="prestamos" role="tab" data-toggle="tab">Todos los prestamos</a></li>
                <li role="presentation"><a href="#pendientes" aria-controls="pendientes" role="tab" data-toggle="tab">Devoluciones pendientes</a></li>
                <li role="presentation"><a href="#reservaciones" aria-controls="reservaciones" role="tab" data-toggle="tab">Reservaciones</a></li>

            </ul>
        </div>


            <!-- BODY DINAMICO -->
            <div class="tab-content">
                <!-- prestamos pestaña -->
                <div role="tabpanel" class="tab-pane fade in active" id="prestamos">
                    <?php incluirSeccionPrestamos('prestamos'); ?>
                </div>

                <!-- pendientes pestaña -->
                <div role="tabpanel" class="tab-pane fade" id="pendientes">
                    <?php incluirSeccionPrestamos('pendientes'); ?>
                </div>

                <!-- reservaciones pestaña -->
                <div role="tabpanel" class="tab-pane fade" id="reservaciones">
                    <?php incluirSeccionPrestamos('reservaciones'); ?>
                </div>
                
                <!-- secciones pestaña -->
                <div role="tabpanel" class="tab-pane fade" id="secciones">
                    <?php incluirSeccionPrestamos('secciones'); ?>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
<?php 
incluirTemplate('footer');
?>