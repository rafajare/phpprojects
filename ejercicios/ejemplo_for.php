<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//Definimos for
	//Al inicio del for y solo una vez $i
	//Condicion-. En cada repiticion se comprueba si $i es <= que 10
	//Si es true se hace la condición
	for ($i=1; $i <=10; $i++) { 
		echo'El valor de $i es';
		echo $i;
		echo"<br>";
	}
	//Break
	for ($i=1; ; $i++) {
		if($i>10){
			break;
		}
		echo $i;
	}
	?>
</body>
</html>