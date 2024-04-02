<?php
class Autor{

private $pdo;
 
private $cedula;
private $area_investigacion;
private $nombre;
private $apellido; 
private $institucion;
private $celular; 
private $email;

public function _CONSTRUCT(){
    $this->pdo = BasedeDatos::Conectar();
}

public function get_cedula() : ?string{
    return $this->cedula;
}

public function set_cedula(string $cedula){
    $this->cedula=$cedula;
}

public function get_area_investigacion() : ?string{
    return $this->area_investigacion;
}

public function set_area_investigacion(string $area_investigacion){
    $this->area_investigacion=$area_investigacion;
}

public function get_nombre() : ?string{
    return $this->nombre;
}

public function set_nombre(string $nombre){
    $this->nombre=$nombre;
}

public function get_apellido() : ?string{
    return $this->apellido;
}

public function set_apellido(string $apellido){
    $this->apellido=$apellido;
}

public function get_institucion() : ?string{
    return $this->institucion;
}

public function set_institucion(string $institucion){
    $this->institucion=$institucion;
}

public function get_celular() : ?string{
    return $this->celular;
}

public function set_celular(string $celular){
    $this->celular=$celular;
}

public function get_email() : ?string{
    return $this->email;
}

public function set_email(string $email){
    $this->emailn=$email;
}
}