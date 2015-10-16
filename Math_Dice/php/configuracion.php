<?php
$lang="sp";
$menu=array(
    "titulo"=>array(
      "sp"=>"Math Dice",
      "en"=>"Math Dice"
    ),
    "portada"=>array(
      "sp"=>"Inicio",
      "en"=>"Home"
    ),
    "instrucciones"=>array(
      "sp"=>"Instrucciones",
      "en"=>"Instructions"
    ),
    "tiposJuego"=>array(
      "sp"=>"Tipos juego",
      "en"=>"Game choice",
      "submenu"=>array(
          "tipo1"=>array(
             "sp"=>"Juego Tradicional",
             "en"=>"Traditional game",
           ),
          "tipo2"=>array(
             "sp"=>"Juego modificado",
             "en"=>"Game modified",
           ),
          "tipo3"=>array(
             "sp"=>"Juego niños",
             "en"=>"Kid game",
           )
           
        )
    
    
    )
    
  )
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Llamamos al array menu, y buscará la clave titulo. Y llamamos al array lenguaje-->
      <a class="navbar-brand" href="#"><?php echo $menu['titulo'][$lang]?></a>
    </div>
  <div>
     <ul class="nav navbar-nav">
        <!--Llamamos al array menu, y buscará la clave portada(que pondrá 'Inicio' en la barra de menu). Y llamamos al array lenguaje-->
        <li class="active"><a href="#"><?php echo $menu['portada'][$lang]?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?><span class="caret"></span></a>
           <ul class="dropdown-menu">
                    <?php 
                    foreach( $menu['tiposJuego'] as $clave => $valor ){
                      // Almacenamos las claves del contenido del array en $clave y hacemos un if
                      if($clave == 'submenu'){
                          //Si el array clave coincide con lo del submenu procederá al siguiente foreach
                          // Aqui el valor seria el array submenu que ha encontrado antes ?..
                          // Imprimira los valores del array.
                          //Vuelca el valor de submenu en una sentencia foreach. De esta forma hará submenu 1, submenu2, submenu3
                      foreach ($valor as $games){ ?>
                            <li><a href="#"><?php echo $games[$lang] ?></a></li>
                    <?php } 
                         }
                    } ?>
            </ul>
                            </li>
        <li><a href="#"><?php echo $menu['instrucciones'][$lang]?></a></li>
          </ul>
    </div>
  </div>
</nav>
  <!-- Este div mostrará las imágenes de los dados ordenados-->
  <div class="container">
      <div class="row">
        <div class="col-sm-2"><img src="../imagenes/dado1.png"></div>
        <div class="col-sm-2"><img src="../imagenes/dado2.png"></div>
        <div class="col-sm-2"><img src="../imagenes/dado3.png"></div>
        <div class="col-sm-2"><img src="../imagenes/dado4.png"></div>
        <div class="col-sm-2"><img src="../imagenes/dado5.png"></div>
        <div class="col-sm-2"><img src="../imagenes/dado6.png"></div>
     </div>
    </div>
    </div>
    <!-- FIN DEL Este div mostrará las imágenes de los dados ordenados-->
