

   
        <!-- Este div y el br permiten separar los dados del dado aletarorio -->
        <div class="container">
          <div class="row">
              <form>
             <h2>Dado aletarorio: <input type="submit" name="tirar" value ="Tirar dado" style="width:150px; height:33px"></h2>
             </form>
            </div>
                  
              
              
                  
              
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
             return $option;
           }
          random(); 
           
          
          
           echo"<div class='col-sm-2'>";
           function dodecaedro(){
             
             $valor=rand(1,12);
             switch($valor){
                 case 1: echo"<div class='col-sm-2'><img src='../imagenes/dode_1.PNG' class='grande'></div>";break;
                 case 2: echo"<div class='col-sm-2'><img src='../imagenes/dode_2.PNG'></div>";break;
                 case 3: echo"<div class='col-sm-2'><img src='../imagenes/dode_3.PNG'></div>";break;
                 case 4: echo"<div class='col-sm-2'><img src='../imagenes/dode_4.PNG'></div>";break;
                 case 5: echo"<div class='col-sm-2'><img src='../imagenes/dode_5.PNG'></div>";break;
                 case 6: echo"<div class='col-sm-2'><img src='../imagenes/dode_6.PNG'></div>";break;
                 case 7: echo"<div class='col-sm-2'><img src='../imagenes/dode_7.PNG'></div>";break;
                 case 8: echo"<div class='col-sm-2'><img src='../imagenes/dode_8.PNG'></div>";break;
                 case 9: echo"<div class='col-sm-2'><img src='../imagenes/dode_9.PNG'></div>";break;
                 case 10: echo"<div class='col-sm-2'><img src='../imagenes/dode_10.PNG'></div>";break;
                 case 11: echo"<div class='col-sm-2'><img src='../imagenes/dode_11.PNG'></div>";break;
                 case 12: echo"<div class='col-sm-2'><img src='../imagenes/dode_12.PNG'></div>";break;
                 
             }
             return $valor;
           }
           dodecaedro();
           echo"</div>";
           
           
           $valor2=rand(1,3);
           switch($valor2){
                case 1: echo"<div class='col-sm-2'><img src='../imagenes/dado1.png'></div>";break;
                case 2: echo"<div class='col-sm-2'><img src='../imagenes/dado2.png'></div>";break;
                case 3: echo"<div class='col-sm-2'><img src='../imagenes/dado3.png'></div>";break;
               
           }
           
           
        
           $valor3=rand(1,3);
           switch($valor3){
                case 1: echo"<div class='col-sm-2'><img src='../imagenes/dado1.png'></div>";break;
                case 2: echo"<div class='col-sm-2'><img src='../imagenes/dado2.png'></div>";break;
                case 3: echo"<div class='col-sm-2'><img src='../imagenes/dado3.png'></div>";break;
               
           }
          
           ?>
           
           
           
        </div>
        </div>
    
