<?php

class BasedeDatos{
    const servidor= "localhost";
    const usuariobd= "root";
    const password= "";
    const nombrebd= "proyectomvc";

    public static function Conectar(){
        try{
        $conexion = new PDO ("mysql:host=".self::servidor.";dbname=".self::nombrebd.";chartset=utf8mb4", self::usuariobd, self::password);

        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conexion;

        }catch(PDOException $e){
            return "Falla de conexion".$e->getMessage();
            
        }
    }
}
