<?php

    class BaseDatos{
        
        private $host='localhost';
        private $db='usuarios';
        private $user='rafapicazo';
        private $pass='';
        private $conexion;
        
    function __construct(){
        $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
   
    function compruebaConex(){
         if($this->conexion->connect_errno){
            echo "Fallo al conectar a mysql: (" . $this->conexion->connect_errno . ") " .$this->conexion->connect_error;
        }
    }
    
    
    
    function comprobarUsuario($apellido){
        
        $sql = "SELECT * FROM usuarios.Usuario WHERE apellidos='$apellido'";
        $result = $this->conexion->query($sql);
        $fila = $result->fetch_assoc();
           if($fila!=null){
            return $fila;
        }else{
            return false;
        }    
    } 
    
    function insertarUsuario($nombre,$apellido){
        
        $sql = "INSERT INTO usuarios.Usuario (nombre,apellidos)
        VALUES ('".$nombre."','".$apellido.")";
        $this->conexion->query($sql);
        return $mysqli->insert_id;
        
    }
}  

?>




