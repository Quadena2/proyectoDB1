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
function incluirSeccionAdmin($nombre){
    include ADMINISTRADOR_URL. "/$nombre.php";
}