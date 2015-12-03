<!DOCTYPE html>


<?php

 include('Jugador.php');
 session_start();
if(isset($_GET['jugador'])){
        
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNombre($_GET['Nombre']);
          $jugador1->setApellido($_GET['Apellido']);
          $jugador1->setPuntos(0);
          $_SESSION['jugador'] = $jugador1;
        }else{
            $jugador1->setNombre($_GET['Nombre']);
            $jugador1->setApellido($_GET['Apellido']);
        }
    }
     if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        
    }
    
        if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        
    }
    if($jugador1->getNombre()==null || $jugador1->getApellido()==null){
    header("Location: index.php");
};
    

    
 include "configuracion.php";
 include "dados_junior.php";
 
 
?>

<html>
  <head>
    <title>MATH DICE</title>
    <!--No coge esto--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--No coge esto--><meta charset="UTF-8">
    <!--No coge esto--><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/dados.css" type="text/css" />
 </head>
 <body>
  

 </body>
</html>


