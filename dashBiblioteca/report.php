<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?> <!-- FIN DE HEADER -->

        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Reportes y estadísticas</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab">Estadísticas</a></li>
                <li role="presentation"><a href="#bitacora" aria-controls="bitacora" role="tab" data-toggle="tab">Bitácora</a></li>
                <li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reportes y fichas</a></li>
            </ul>

            <!-- BODY DINAMICO -->
            <div class="tab-content">
                <!-- BODY DINAMICO -->

                <div role="tabpanel" class="tab-pane fade in active" id="statistics">
                    <?php incluirSeccionReporte('estadistica'); ?>
                </div>

                <!--BITACORA PESTAÑA -->
                <div role="tabpanel" class="tab-pane fade" id="bitacora">
                    <?php incluirSeccionReporte('bitacora'); ?>
                </div>

                <!-- REPORTES PAGINA -->
                <div role="tabpanel" class="tab-pane fade" id="reports">
                    <?php incluirSeccionReporte('fichas'); ?>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
<?php 
incluirTemplate('footer');
?>