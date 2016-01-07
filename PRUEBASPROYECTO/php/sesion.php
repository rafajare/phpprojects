<?php
  include('Jugador.php');
  require('../bbdd/basedatos.php');
 session_start();
 
 //$db = new BaseDatos();
 //$prueba = $db->comprobarUsuario($_POST['Apellido']);
    //var_dump($prueba);
    
 if(isset($_GET['jugador'])){
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNombre($_GET['Nombre']);
          $jugador1->setApellido($_GET['Apellido']);
          $jugador1->setPuntos(0);
          $_SESSION['jugador'] = $jugador1;
          //$db->insertarUsuario($_GET['Nombre'],$_GET['Apellido']);
        }else{
            $jugador1 = $_SESSION['jugador'];
            $jugador1->setNombre($_GET['Nombre']);
            $jugador1->setApellido($_GET['Apellido']);
        }
    }

    
        if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        
    }
    if($jugador1->getNombre()==null || $jugador1->getApellido()==null){
    header("Location: index.php");
};

  $nombre=$jugador1->getNombre();
  $apellido=$jugador1->getApellido();
  $puntos=$jugador1->getPuntos();
  
  

?>