
<?php
if(isset($_GET["oculto1"])){
    $oculto1=$_GET["dado1"];
    $operacion=$_GET["operacion"];
    $oculto2=$_GET["dado2"];
    $valor_1=$_GET["oculto1"];
    $valor_2=$_GET["oculto2"];
    
    
    
    if($valor_1==$oculto1 && $valor_2==$oculto2){
        if($operacion=="+"){
            $resultado=$valor_1+$valor_2;
             print($oculto1.$operacion.$oculto2." = ".$resultado);
        }else{
            $resultado=$valor_1-$valor_2;
             print($oculto1.$operacion.$oculto2." = ".$resultado);
        }
       
    }else{
        echo"Hay un fallo de escritura. Revise los numeros y marque la operacion deseada.";
    }
    
}/*else{
        echo"No hay operador definido";
    }
    */
    
    
?>

