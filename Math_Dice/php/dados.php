<!DOCTYPE html>
<html>
    <head>
        <!-- Ponemos el link a bootstrap para poder acceder a los div de la clase configruación -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body>
        <!-- Este div y el br permiten separar los dados del dado aletarorio -->
        <div class="container">
          <div class="row">
             <h2>Dado aletarorio:</h2>
              <br>
              <table>
                 <form id="random" name="random">
                     <tr><td><input type="submit" name="tirar" value ="Tirar dado"></td></tr>
                  </form>
              
        <?php
           
           function random(){
           $option=rand(1,6);
            
         
             switch($option){
                 case 1: echo"<div class='col-sm-2'><img src='../imagenes/dado1.png'></div>";break;
                 case 2: echo"<div class='col-sm-2'><img src='../imagenes/dado2.png'></div>";break;
                 case 3: echo"<div class='col-sm-2'><img src='../imagenes/dado3.png'></div>";break;
                 case 4: echo"<div class='col-sm-2'><img src='../imagenes/dado4.png'></div>";break;
                 case 5: echo"<div class='col-sm-2'><img src='../imagenes/dado5.png'></div>";break;
                 case 6: echo"<div class='col-sm-2'><img src='../imagenes/dado6.png'></div>";break;
             }
           }
           return random();
             
        ?>
            </table>
        </div>
        </div>
    </body>
</html>