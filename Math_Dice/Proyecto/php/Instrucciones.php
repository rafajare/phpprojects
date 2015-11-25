<?php
include "configuracion.php";
?>
<html>
  <head>
    <title>Instrucciones</title>
    <!--No coge esto--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--No coge esto--><meta charset="UTF-8">
    <!--No coge esto--><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/Instrucciones.css" type="text/css" />
    
    
 </head>
 <body>
     
     
     <center><img src="../imagenes/instrucciones.JPG"></center>
    
        <form id="instrucciones" >
            <li><p>Math Dice es un juego educativo en el cual, el usuario debe conseguir alcanzar el valor de un numero(mostrado con la imagen de un dodecaedro)
            puediendo utilizar un maximo 5 dados donde debe realizar una serie de operaciones con ellos.</p></li>
            
            <table align="center">
                <tr>
                    <th><h1>Tipos de juego</h1></th>
                </tr>    
            </table>
            
                 <table>
                    <tr align="center">
                      <td><h2>Junior</h2></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><h2>Senior</h2></td>
                    </tr>
                    
                    <tr align="center">
                      <td>Sumar</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Sumar y Restar</td>
                    </tr>
                    <tr align="center">
                      <td>Restar</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>Multiplicar y Dividir</td>
                    </tr>
                     <tr align="center">
                      
                      <td>&nbsp;</td>
                      <td><h1>Reglas para ambos juegos</h1></td>
                      <td>&nbsp;</td>
                    </tr>
                    
                    <tr align="center">
                      <td><li>Solo se pueden usar los valores de los dados</li></td>
                      <td><li>Las operaciones siguen el orden de importancia (multiplicar y dividir primero)</li></td>
                      <td></td>
                      <td><li>No es necesario utilizar todos los dados</li></td>
                      
                    </tr>
                     <tr align="center">
                      <td><td><br><br><a href="index.php"><input class="rojo" type="button" value="Jugar"/></td></a></td>
                      
                    </tr>
                    
                </table>
                
                
        </form>
 </body>
</html>
