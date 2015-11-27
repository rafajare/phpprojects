
   <?php
    session_start();
    
    if(strlen($_GET['Nombre'])==0){
     header('Location:index.php');
     
   }
   
    if(strlen($_GET['Apellido'])==0){
     header('Location:index.php');
   }
   
   include("Jugador.php");

    $_GET['Nombre']; 
    $_GET['Apellido'];
    $nombre=$_GET['Nombre'];
    $apellido=$_GET['Apellido'];
    
    $jugador =new Jugador($nombre,$apellido,0);
    echo $jugador->getNombre();
    echo" ";
    echo $jugador->getApellido();
    echo"<br>";
    echo"Puntos: ";
    echo $jugador->getPuntos();

           
    function aleatorio($minimo,$maximo){
              
         $result=rand($minimo,$maximo);
         return $result;
    }
    
   $valor_1=aleatorio(1,6);
   $valor_2=aleatorio(1,6);
   $valor_3=aleatorio(1,6);
   $valor_4=aleatorio(1,3);
   $valor_5=aleatorio(1,3);
   $valor_dode=aleatorio(1,12);
          
           ?>
           <form name="calcular" action="resultado_junior.php">
            
           <div class="container">
            <div class="row">
                  <br>
                      <div class="col-sm-2">
                          Dado 1 <br>
                          <img src="../imagenes/dado<?php echo $valor_1;?>.png" height='200' widht='200'>
                          <br><br>
                         
                            <select name="dado1" style="width:100px;">
                                  <option value=""></option>   
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="operacion1" value="+"/><font color="black">+</font>
                               <input type="radio" name="operacion1" value="-"/><font color="black">-</font>
                      </div>
                      
                      <div class="col-sm-2">
                          Dado 2 <br>
                          <img src="../imagenes/dado<?php  echo $valor_2;?>.png" height='200' widht='200'>
                          <br><br>
                            <select name="dado2" style="width:100px;">  
                                  <option value=""></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="operacion2" value="+"/><font color="black">+</font>
                               <input type="radio" name="operacion2" value="-"/><font color="black">-</font>
                      </div>
                      
                       <div class="col-sm-2">
                          Dado 3 <br>
                          <img src="../imagenes/dado<?php  echo $valor_3;?>.png" height='200' widht='200'>
                          <br><br>
                             <select name="dado3" style="width:100px;">    
                                  <option value=""></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="operacion3" value="+"/><font color="black">+</font>
                               <input type="radio" name="operacion3" value="-"/><font color="black">-</font>
                      </div>
                      
                       <div class="col-sm-2">
                          Dado 4 <br>
                          <img src="../imagenes/dado<?php  echo $valor_4;?>.png" height='200' widht='200'>
                          <br><br>
                            <select name="dado4" style="width:100px;"> 
                                  <option value=""></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="operacion4" value="+"/><font color="black">+</font>
                               <input type="radio" name="operacion4" value="-"/><font color="black">-</font>
                      </div>
                      
                       <div class="col-sm-2">
                          Dado 5 <br>
                          <img src="../imagenes/dado<?php  echo $valor_5;?>.png" height='200' widht='200'>
                          <br><br>
                            <select name="dado5" style="width:100px;"> 
                                 <option value=""></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                          </select>&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                      
                        <div class="col-sm-2">
                        Dodecaedro <br>
                          <img src="../imagenes/<?php  echo $valor_dode;?>.png" height='200' widht='200'>
                        </div>
                
                               <input type="hidden" name="oculto1" value="<?php print $valor_1;?>"/>
                               <input type="hidden" name="oculto2" value="<?php print $valor_2;?>"/>
                               <input type="hidden" name="oculto3" value="<?php print $valor_3;?>"/>
                               <input type="hidden" name="oculto4" value="<?php print $valor_4;?>"/>
                               <input type="hidden" name="oculto5" value="<?php print $valor_5;?>"/>
                               <input type="hidden" name="dodecaedro" value="<?php print $valor_dode;?>"/>
                               <input type="hidden" name="nombre" value="<?php print $nombre;?>"/>
                               <input type="hidden" name="apellido" value="<?php print $apellido;?>"/>
                               <br><br><br><br>
          
                     </div>
                     <br>
                      <input class ="reset" type="reset" name="Submit" value="Restablecer operaciones">
                      <input class="calcular" type="submit" name="calcular" value ="Calcular"> 
                     <p><h2>Si es imposible llegar al valor del dodecaedro pulse F5</h2></p><br>
                     <p><h2>En caso de que solo necesite un dado: Utilice ese dado y pulse una casilla '+'</h2></p>
                      
                     
                     </div>
                               
             </form>           


