<!DOCTYPE html>

<?php
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
  
                      <!--
                     <form  name="datos">
                               <img src="../imagenes/imagen2.jpg" height='200'></img>
                               <img src="../imagenes/formulario.jpg" width='200'></img>
                               <center><h1>BIENVENIDO A MATH DICE</h1></center>
                               <center><p>Por favor, para empezar a jugar introduzca los siguientes datos.</p></center>
                               <center><input type="text" name="Nombre" placeholder="Nombre" /></center>
                               <br>
                               <br>
                               <center><input type="text" name="Apellidos" placeholder="Apellidos"/></center>
                               <br>
                               <br>
                               <center><input type="text" name="Edad" placeholder="Edad"/></center>
                               <br>
                               <center>
                                   <input type="Submit" name="Junior" value="Junior" formaction="index_junior.php" > &nbsp;&nbsp;
                                   <input type="Submit" name="Senior" value="Senior" formaction="index_senior.php" style="margin-bottom:100px;"/>
                               </center>
                        </form>
                      
                       <form id="formulario" name="datos">
                              
                       <table width="100%" height="100%" cellspacing="1px">
                             <tr height="50px">
                               <td colspan="2px">
                                 <table title="Banner" border="0">
                                     <tr>
                                     <td><img src="../imagenes/imagen2.jpg" height='200'style="margin-right:50px;"></img></td>
                                     <td>&nbsp;
                                         
                                     </td>
                                     <td><center><h1>BIENVENIDO A<br> MATH DICE</h1></center></td>
                                     <td><img src="../imagenes/formulario.jpg" width='200'style="margin-left:150px;"></img></td>
                                     </tr>
                                 </table>
                                      </td>
                                   </tr>
   
                              
                             <table align="left" title="Contenido" border="0" width="400px">
                                <tr>
                                    <center><input type="text" name="Nombre" placeholder="Nombre" /></center>
                                </tr>
                                <tr>
                                    <center><input id="verde" type="text" name="Apellido" placeholder="Apellido"/></center>
                                </tr>
                                <tr>
                                    <center><input type="text" name="Edad" placeholder="Edad"/></center>
                                </tr>
                                <tr>
                                    <center>
                                        <br>
                                   <input class="verde" type="Submit" name="Junior" value="Junior" formaction="index_junior.php" > &nbsp;&nbsp;
                                   <input class="rojo" type="Submit" name="Senior" value="Senior" formaction="index_senior.php"/>
                                    </center>
                                </tr>
                                
                             </table>
                             </td>
                            </table>
                            </form>
                            -->
                         
                         
                            
                             <form class="form-horizontal" role="form" name="datos">
                                    <center> 
                                      <div class="form-group">
                                        <div class="col-lg-10">
                                            
                                         <center><h1>BIENVENIDO<br> A<br> MATH DICE</h1></center>
                                         <input type="text" name="Nombre" placeholder="Nombre"style="width:25%" />
                                        </div>
                                      </div>
                                      <div class="form-group">

                                        <div class="col-lg-10">
                                          <input type="text" name="Apellido" placeholder="Apellido" style="width:25%"/>
                                          
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
                                      </div>
                                     </center> 
                                    </form>
                                    
                                    
                            
                    </body>
                    </html>