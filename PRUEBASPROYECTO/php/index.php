<!DOCTYPE html>
<?php
include('Jugador.php');
session_start();
?>



<html>
  <head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/css.1.css" type="text/css" />
 </head>
 <body>
                            
                             <form class="form-horizontal" role="form" name="datos" method="get">
                               <input type="hidden" name="jugador">
                                    <center> 
                                      <div class="form-group">
                                        <div class="col-lg-10">
                                            
                                         <center><h1>BIENVENIDO<br> A<br> MATH DICE</h1></center>
                                         <input type="text" name="Nombre" placeholder="Introduce nombre"style="width:25%" />
                                        </div>
                                      </div>
                                      <div class="form-group">

                                        <div class="col-lg-10">
                                          <input type="text" name="Apellido" placeholder="Introduce apellido" style="width:25%"/>
                                          
                                        </div>
                                        <div class="col-lg-10">
                                         <img class="img-responsive" src="../imagenes/formulario.jpg"><br>
                                          <img class="img-responsive2" src="../imagenes/imagen2.jpg" width='200'></img>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                          <a href="Instrucciones.php"><input class="rojo" type="button" value="Instrucciones" /></a><br><br>
                                          <input class="verde" type="Submit" name="Junior" value="Junior" formaction="cabecera_junior.php" >
                                          <input class="verde" type="Submit" name="Senior" value="Senior" formaction="cabecera_senior.php"/>
                                        </div>
                                        <br>
                                        <input type="radio" name="lenguaje" value="spanish" checked="checked">Spanish
                                        <input type="radio" name="lenguaje" value="english">English
                                      </div>
                                     </center> 
                                     </form>
                    </body>
                    </html>