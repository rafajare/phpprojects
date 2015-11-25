<!DOCTYPE html>

  <?php
    session_start();
    
    
    if(isset($_GET["oculto1"])){
    $operacion1=$_GET["operacion1"];
    $operacion2=$_GET["operacion2"];
    $operacion3=$_GET["operacion3"];
    $operacion4=$_GET["operacion4"];
    
    $oculto1=$_GET["dado1"];
    $oculto2=$_GET["dado2"];
    $oculto3=$_GET["dado3"];
    $oculto4=$_GET["dado4"];
    $oculto5=$_GET["dado5"];
    
    $valor_1=$_GET["oculto1"];
    $valor_2=$_GET["oculto2"];
    $valor_3=$_GET["oculto3"];
    $valor_4=$_GET["oculto4"];
    $valor_5=$_GET["oculto5"];
    $dodecaedro=$_GET["dodecaedro"];

}

 $Juego=array(
        "valor"=>array(
              1 => $valor_1,
              2 => $valor_2,
              3 => $valor_3,
              4 => $valor_4,
              5 => $valor_5
            ),
        "operacion"=>array(
            1 =>$operacion1,
            2 =>$operacion2,
            3 =>$operacion3,
            4 =>$operacion4
            ),
        "oculto"=>array(
            1=>$oculto1,
            2=>$oculto2,
            3=>$oculto3,
            4=>$oculto4,
            5=>$oculto5
            )    
    );
    
    $Recorrido=array(
        "operacion"=>array(
            1 =>null,
            2 =>null,
            3 =>null,
            4 =>null
            ),
        "oculto"=>array(
            1=>null,
            2=>null,
            3=>null,
            4=>null,
            5=>null
            ) 
    );
    $contadorPuntos=0;
    $contadorValor=0;
    $contadorOperacion=0;
    for($i=1;$i<=count($Juego['oculto']);$i++){
          //Digo que si el valor que introduce al usuario es distinto de null E igual que el dado, se añada al recorrido
            //el que sea distinto al dado NO OPERARÁ CON EL pero si se mostrará
        if($Juego['oculto'][$i]!=null && $Juego['oculto'][$i]==$Juego['valor'][$i]){
            $Recorrido['oculto'][$contadorValor+1]=$Juego['oculto'][$i];
            $contadorValor++;
        }
    }
    
        for($i=1;$i<=count($Juego['operacion']);$i++){
        if($Juego['operacion'][$i]!=null){
            $Recorrido['operacion'][$contadorOperacion+1]=$Juego['operacion'][$i];
            $contadorOperacion++;
        }
    }
    
    
    $resultado=0;
    
  
         for($i=1; $i<=$contadorValor;$i++){
            if($i==1){
              if($Recorrido['operacion'][$i]=='+'){
                $resultado=$Recorrido['oculto'][$i]+$Recorrido['oculto'][$i+1];
              }elseif($Recorrido['operacion'][$i]=='-'){
                $resultado=$Recorrido['oculto'][$i]-$Recorrido['oculto'][$i+1];
            }
        }else{
             if($Recorrido['operacion'][$i]=='+'){
                $resultado=$resultado+$Recorrido['oculto'][$i+1];
                
            }else{
                $resultado=$resultado-$Recorrido['oculto'][$i+1];
                 }
             }
          }
           echo'<h1>Valor esperado:'; echo $dodecaedro+'</h1>';
           echo"<br>";
           echo"<br>";
           print($oculto1.$operacion1.$oculto2.$operacion2.$oculto3.$operacion3.$oculto4.$operacion4.$oculto5." = ".$resultado);
          
         
         if($resultado==$dodecaedro){
             echo"<br>";
             echo'<h1>CORRECTO! HAS GANADO 1 PUNTO</h1>';
             echo"<img src='../imagenes/correcto2.gif'>";
             echo"<br>";
             echo "<h1>Vuelva atras para seguir jugando</h1>";
             
             
         }else{
             echo"<br>";
             echo"<img src='../imagenes/error.gif'>";
             echo"<br>";
             echo "<h1>Vuelva atras para seguir jugando</h1>";
            }
    
       //No funciona el sistema de puntos 
            //if(isset($_GET["dodecaedro"])){
             //$valor_dode=$_GET["dodecaedro"];
           //}
               //if($resultado==$valor_dode){
                  //$S_SESSION["Jugador"]->setPuntos(1);    
                  //}
            //echo "<br>";
            //echo" puntos: "; echo setPuntos();
            
?>
     
<html>
    <form>
         <input type="hidden" name="resultado" value="<?php $resultado ;?>"/>
    </form>
</html>
    
