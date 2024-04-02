<?php

require_once "models/basededatos.php";

//var_dump($_GET["controlador"]);

if(!isset($_GET['c'])){
    require_once "controllers/inicio.controlador.php";
    $controlador = new Iniciocontrolador();
    call_user_func (array ($controlador, "Inicio"));
}else{
    $controlador = $_GET['c'];
    require_once "controllers/$controlador.controlador.php";
    $controlador = ucwords ($controlador)."Controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio" ;
     call_user_func(array($controlador,$accion));
}
    