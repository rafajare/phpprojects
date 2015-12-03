<!DOCTYPE html>
<?php
    include("Jugador.php");
    session_start();

   
        if(isset($_GET['jugador'])){
                          
                          if (!isset($_SESSION['jugador'])) {
                            $jugador1 = new Jugador();
                            $jugador1->setNombre($_GET['Nombre']);
                            $jugador1->setApellido($_GET['Apellido']);
                            $jugador1->setPuntos(0);
                            $_SESSION['jugador'] = $jugador1;
                        }
                      
                      }
                       if (isset($_SESSION['jugador'])) {
                       $jugador1 = $_SESSION['jugador'];
                          
                      }
                      
    include('configuracion.php');
                      
                     
                     
  echo $nombre; echo " "; echo $apellido;
  echo "<br>";
  echo"puntos: "; echo $puntos;        

$jugador1->setNombre($_GET['nombre']);
$jugador1->setApellido($_GET['apellido']);

 $nombre=$jugador1->getNombre();
 $apellido=$jugador1->getApellido();

 
 ?>
<html>
  <head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/css.2.css" type="text/css" />
 </head>
 <body>
                           
                             <form class="form-horizontal" role="form" name="datos" method="get" action="examen.php">
                                    <center> 
                                      <div class="form-group">
                                        <div class="col-lg-10">
                                            
                                         <center><h1>MODIFICAR DATOS</h1></center>
                                         <input type="text" name="Nombre" style="width:25%" value="<?php print $nombre ?>"/>
                                        </div>
                                      </div>
                                      <div class="form-group">

                                        <div class="col-lg-10">
                                          <input type="text" name="Apellido" style="width:25%" value="<?php print $apellido ?>"/>
                                          
                                        </div>
                                        <div class="col-lg-10">
                                         <img class="img-responsive" src="../imagenes/formulario.jpg"><br>
                                          
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                        
                                          <input class="verde" type="Submit" name="Junior" value="Junior" formaction="cabecera_junior.php"/>
                                          <input class="verde" type="Submit" name="Senior" value="Senior" formaction="cabecera_senior.php"/><br><br>
                                          <input type="radio" name="lenguaje" value="spanish" checked="checked">Spanish
                                          <input type="radio" name="lenguaje" value="english">English
                                        </div>
                                      </div>
                                     </center> 
                                    </form>
                    </body>
                    </html>