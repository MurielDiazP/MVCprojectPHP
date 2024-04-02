<?php
class Trabajo_enviado{

private $pdo;
 
private $id;
private $titulo;
private $abstract;
private $autor_id; 

public function _CONSTRUCT(){
    $this->pdo = BasedeDatos::Conectar();
}

public function get_id() : ?string{
    return $this->id;
}

public function set_id(string $id){
    $this->id=$id;
}

public function get_titulo() : ?string{
    return $this->itulo;
}

public function set_titulo(string $titulo){
    $this->titulo=$titulo;
}

public function get_abstract() : ?string{
    return $this->abstract;
}

public function set_abstract(string $abstract){
    $this->abstract=$abstract;
}

public function get_autor_id() : ?string{
    return $this->autor_id;
}

public function set_autor_id(string $autor_id){
    $this->autor_id=$autor_id;
}


}