<!DOCTYPE html>
<?php
function foo($variable)
{
    echo "Funcion de ejemplo ".$variable."<br>";
}

?>
<html>
    <head>
        <tittle>FUNCIONES</tittle>
    </head>
    <body>
        <div>
        <?php
        foo(3);
        foo("Rafa");
        ?>
        </div>
        
       
    </body>
</html>