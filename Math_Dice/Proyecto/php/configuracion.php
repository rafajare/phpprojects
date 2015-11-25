<?php
    if(isset($_GET["lenguaje"])){
    $lenguaje=$_GET["lenguaje"];
    }
    if($lenguaje=="english"){
      $lang="en";
    }else{
      $lang="sp";
    }
$menu=array(
    "titulo"=>array(
      "sp"=>"<img src='../imagenes/math.jpg' width='50x'>",
      "en"=>"<img src='../imagenes/math.jpg' width='50x'>"
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
             "sp"=>"Juego Junior",
             "en"=>"Junior game",
           ),
          "tipo2"=>array(
             "sp"=>"Juego Senior",
             "en"=>"Senior game",
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
        <li class="active"><a href="index.php"><?php echo $menu['portada'][$lang]?></a></li>
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
                            <li><a href="index.php"><?php echo $games[$lang] ?></a></li>
                    <?php } 
                         }
                    } ?>
            </ul>
                            </li>
                            
        <li><a href="Instrucciones.php"><?php echo $menu['instrucciones'][$lang]?></a></li>
        
          </ul>
    </div>
  </div>
</nav>
  