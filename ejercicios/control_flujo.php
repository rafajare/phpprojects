<?php 

//Definir variables
$a=15;
$b=14;

//Probamos el primer if
if($a > $b){
	echo " a es mayor que b";
}

//Linea de separación
echo "<br><hr>";
//Probamos una estructura completa
$b=16;
if($a > $b){
	echo "a es mayor que b";
}else if ($a == $b){
	echo "a es igual que b";
} else{
	echo "a es menor que b";
}

?>