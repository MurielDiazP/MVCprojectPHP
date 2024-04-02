<?php

class Iniciocontrolador{
  private $modelo;

    public function _CONSTRUCT (){
        //$this->modelo=new Trabajo_enviado();
    }
    
    public function Inicio(){
        $bd = BasedeDatos::Conectar();
        require_once "views/encabezado.php";
        require_once "views/inicio/principal.php";
        require_once "views/pie.php";

    }

}