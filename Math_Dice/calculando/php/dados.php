
    <?php
           
    function aleatorio($minimo,$maximo){
              
         $result=rand($minimo,$maximo);
         return $result;
    }
          
          
           ?>
           
           <div class="container">
              <div class="row">
                  
                      <div class="col-sm-2">
                          Dado 1 <br>
                          <img src="../imagenes/dado<?php echo aleatorio(1,6);?>.png">
                      </div>
                      
                      <div class="col-sm-2">
                          Dado 2 <br>
                          <img src="../imagenes/dado<?php echo aleatorio(1,6);?>.png">
                      </div>
                      
                      <div class ="col-sm-2">
                          <br>
                          <form name="calcular" action="resultado.php">
                               <input type="text" name="dado1"/>
                               <br>
                               <input type="radio" name="operacion" value="+"/>+
                               <input type="radio" name="operacion" value="-"/>-
                               <br>
                               <input type="text" name="dado2"/>
                               <br>
                               <input type="hidden" name="oculto" value=""/>
                        </div>
                        
                                    <div class ="col-sm-2">
                                       <br><br>
                                       <input type="submit" name="calcular" value ="Calcular">
                                    </div> 
                          </form>
              </div>
           </div>
           
           