<?php
require_once "Controlador/Controlador.php";


$controlador = new Controlador();
if (isset($_GET["accion"])){
    if ($_GET["accion"] == "about-us"){
        $controlador->verPagina('Vista/html/about-us.php');
    } elseif ($_GET["accion"] == "principal"){
        $controlador->verPagina('Vista/html/principal.php');
    }
} else {
    $controlador->verPagina('Vista/html/principal.php');
}