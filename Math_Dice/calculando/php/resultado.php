<?php
if(isset($_GET["operacion"])){
    $operacion=$_GET["operacion"];
        print($operacion);
            
            
}else{
    echo"No hay operador definido";
}

?>