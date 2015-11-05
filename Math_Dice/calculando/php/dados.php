
    <?php
           
    function aleatorio($minimo,$maximo){
              
         $result=rand($minimo,$maximo);
         return $result;
    }
    
   $valor_1=aleatorio(1,6);
   $valor_2=aleatorio(1,6);
          
          
          
           ?>
           
           <div class="container">
              <div class="row">
                  
                      <div class="col-sm-2">
                          Dado 1 <br>
                          <img src="../imagenes/dado<?php echo $valor_1;?>.png">
                      </div>
                      
                      <div class="col-sm-2">
                          Dado 2 <br>
                          <img src="../imagenes/dado<?php  echo $valor_2;?>.png">
                      </div>
                      
                      <div class ="col-sm-2">
                          <br>
                          <form name="calcular" action="resultado.php">
                                
                               <input type="text" name="dado1" placeholder="Introduce el dado 1"/>
                               <br>
                               <input type="radio" name="operacion" value="+"/>+
                               <input type="radio" name="operacion" value="-"/>-
                               <br>
                               <input type="text" name="dado2" placeholder="Introduce el dado 2"/>
                               <br>
                               <input type="hidden" name="oculto1" value="<?php print $valor_1;?>"/>
                               <input type="hidden" name="oculto2" value="<?php print $valor_2;?>"/>
                               <br>
                               <input type="submit" name="calcular" value ="Calcular">
                               
                               
                        </div>
                                     
                          </form>
              </div>
           </div>
           
           