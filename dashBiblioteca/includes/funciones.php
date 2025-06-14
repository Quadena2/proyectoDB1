<?php
require 'app.php';

function incluirTemplate(String $nombre, String $pag = 'none'){
    #include TEMPLATES_URL."/$nombre.php";

    if($pag == "admin"){
        include TEMPLATES_URL."/$nombre.php";
        include TEMPLATES_URL. "/menuAdmin.php";
    }
    if($pag == "prov"){
        include TEMPLATES_URL."/$nombre.php";
        include TEMPLATES_URL. "/menuProvedor.php";
    }
    if($pag == "prest"){
        include TEMPLATES_URL."/$nombre.php";
        include TEMPLATES_URL. "/menuPres.php";
    }
    if($pag == 'none'){
        include TEMPLATES_URL. "/$nombre.php";
    }
}

function incluirSeccion(String $nombre){
    include SECCION_URL . "/$nombre.php";
}
function incluirSeccionRegisrto($nombre){
    include REGISTRO_URL. "/$nombre.php";
}
function incluirSeccionAdministracion($nombre){
    include ADMINISTRACION_URL . "/$nombre.php";
}
function incluirSeccionPrestamos($nombre){
    include PRESTAMOS_URL . "/$nombre.php";
}
function incluirSeccionReporte($nombre){
    include REPORTE_URL . "/$nombre.php";
}
function incluirSeccionLibroPrest($nombre){
    include CATALOGO_URL . "/$nombre.php";
}
function incluirListUsuarios($nombre){
    include LISTADO_USUARIOS_URL . "/$nombre.php";
}
function incluirCrearUsuarios($nombre){
    include CREAR_USUARIOS_URL . "/$nombre.php";
}
function incluirCrearAdministracion($nombre){
    include CREAR_ADMINISTRACION_URL . "/$nombre.php";
}
function incluirListAdministracion($nombre){
    include LISTADO_ADMINISTRACION_URL . "/$nombre.php";
}