<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Primera Pagina Web</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="https://kit.fontawesome.com/a020b0890b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:wght@500&family=Rubik+Vinyl&display=swap" rel="stylesheet">

    <style>
      .foto{
        background-color: rgba(245, 245, 220, 0.6);
        width: auto;
        height: auto;
        border: 2px solid rgb(168, 153, 153);
        padding: 10px;
        text-align: center;
        position: relative;
        overflow:hidden;
        cursor:pointer;
        float: left;
        margin-top: 30px;
        margin-right: 32px;
        margin-left: 32px;
        margin-bottom: 30px;

      }

      .titulo{
      
        color: black;
      
      }

      .foto a{

        text-decoration: none;
        color: black;

      }

      .foto img{

        width: 350px;
        height: 400px;

      }

    </style>

  </head>
  <body>
    
    <main>

      <header>
        
        <div id="logo">

        </div>

        <div id="redes">

          <a href="https://www.facebook.com" target="_blank" class="facebook"></a>
          <a href="https://twitter.com/" target="_blank" class="twitter"></a>
          <a href="https://ar.pinterest.com/" target="_blank" class="pinterest"></a>
          <a href="https://www.youtube.com/" target="_blank" class="youtube"></a>

        </div>

        <div id="titulo">

          <h2 id="starwars">Star Wars</h2>

        </div>
       

      </header>

      <nav>
        
        <a href="index.php">Inicio</a>
        <a href="peliculas.php">Peliculas</a>  
        <a href="series.php">Series</a>      
        <a href="banda_sonora.php">Banda sonora</a>
        <a href="trailers.php">Trailers</a>
        <a href="productos.php">Productos</a>        
        <a href="galeria.php">Galeria</a> 
        

      </nav>
      
      <aside>
        
        <section id="izquierda">
        <?php

include("conectar.php");

$link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas");

if(!$link){

  echo "Problemas para conectar con la base de datos";

}

$select = "SELECT * FROM productos_proyecto";

$result = mysqli_query($link, $select);

while($row = mysqli_fetch_array($result)){

  $id = $row['id'];

?>

  <div class="foto">

    <a href='productos_info.php?id=<?php echo $id; ?>'>

    <img src="<?php echo $row['foto']?>">

    <div class="titulo"><h1><?php echo $row['nombre'] ?></h1></div>

    <h3><?php echo $row['precio'] ?></h3>

   </a>

  </div>


<?php

}

?>
        </section>

      </aside>

      <footer class="pie-pagina">

        <div class="grupo-1">
          <div class="box">

            <figure>

              <a href="#">

                <img src="img/starwars-fotos/logo3.jpg" alt="logo de star wars">

              </a>

            </figure>

          </div>

          <div class="box">

            <h2>PAGINAS</h2>

            <p><a href="index.php">Inicio</a></p>
            <p><a href="peliculas.php">Peliculas</a></p>  
            <p><a href="series.php">Series</a></p>    
            <p><a href="banda_sonora.php">Banda sonora</a></p>
            <p><a href="trailers.php">Trailers</a></p>
            <p><a href="productos.php">Productos</a></p>       
            <p><a href="galeria.php">Galeria</a></p> 

          </div>

          <div class="box">

              <h2>SIGUENOS</h2>

              <div class="red-social">

                <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://twitter.com/?lang=es" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>

                <br><br><h2>INFORMACION:</h2>

                <p>En esta pagina web damos informacion sobre todas las series y peliculas de star wars que salieron y van a salir.</p>

              </div>

          </div>

        </div>

        <div class="grupo-2">

          <small>&copy; 2022 <b>Star Wars</b> - Todos los Derechos Reservados.</small>

        </div>

      </footer>

    </main>

    </div>
  </body>
</html>
