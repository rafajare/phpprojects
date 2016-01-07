<?php
class Jugador{
    private $nombre;
    private $apellido;
    private $puntos;
    
    function Jugador(){
        
        
    }
    
    
    
    function getNombre(){
        return $this->nombre;
    }
    
    function getApellido(){
        return $this->apellido;
    }
    
    function getPuntos(){
        return $this->puntos;
    }
    
   
    
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    function setApellido($apellido){
        $this->apellido = $apellido;
    }
    
    function setPuntos($puntos){
        $this->puntos = $puntos;
    }
    
    
}

    
?>