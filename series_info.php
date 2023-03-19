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

        #izquierda {
          background-color: rgba(255, 255, 255, 0.6);
          margin-left: 30px;
          margin-right: 30px;
          margin-bottom: 30px;
          float: left;
          min-height: 400px;
          width: 1143px;
          padding-bottom: 15px;
        }

        #derecha {
          background-color: rgba(255, 255, 255, 0.6);
          margin-right: 30px;
          margin-bottom: 30px;
          float: left;
          min-height: 200px;
          width: 330px;
        }

        .fotogrande {

          width: 90%;
          display: block;
          margin: auto;
          min-height: 600px;

        }

        .fotochica{

          display: block;
          margin: auto;

        }

        .titulo{

          font-size: 30px;
          text-align: center;
                
        }
        
        .informacion{
        
          font-size: 25px;
          text-align: justify;
        
        }
        
        .todo{
        
          margin: 20px;
        
        }
        
        .tododer{
        
          margin: 10px;
        
        }
        
        #derecha p{
        
          font-size: 20px;
        
        }
        
        #derecha h3{
        
          font-size: 25px;
          text-align: center;

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

  $id = $_GET["id"];

  if(!$link){
    
    echo "Problemas para conectar con la base de datos";
  
  }
  
  $select = "SELECT * FROM series_proyecto WHERE id = '$id' ";
  
  $result = mysqli_query($link, $select);
  
  $row = mysqli_fetch_array($result);

  $id = $row["id"];

  $fechaoriginal = $row["fecha"];

  $fecha = date("d/m/Y", strtotime($fechaoriginal));
  
  echo "<br><div class='todo'><div class='titulo'><h1>" . $row['titulo'] . "</h1></div>";

  echo "<div class='informacion'>" . $row['informacion'] . "</div><br>";

  echo "<br><br>" . "<img class='fotogrande' src='" . $row['fotogrande'] . "'>";

  echo "<h2><div class='titulo'>" . "Sinopsis:" . "</div></h2>";

  echo "<br><div class='informacion'>" . $row['sinopsis'] . "</div><br></div>";

    ?>
          
        </section>

        <section id="derecha">
           
<?php

//info para sacar las sries https://www.filmaffinity.com/ar/movie-group.php?group-id=2344

    echo "<img class='fotochica' src='" . $row['foto'] . "'>";

    echo "<br><div class='tododer'>" . "<h3>" . $row['titulo'] . "</h3>";
          
    echo "<p><strong>" . "Fecha:" . "</strong></p>" . $fecha . "" . "<br>";

    echo "<p><strong>" . "Direccion:" . "</strong></p>" . $row['direccion'] . "<br>";

    echo "<p><strong>" . "Guion:" . "</strong></p>" . $row['guion'] . "<br>";

    echo "<p><strong>" . "Musica:" . "</strong></p>" . $row['musica'] . "<br>";

    echo "<p><strong>" . "Fotografia:" . "</strong></p>" . $row['fotografia'] . "<br>";

    echo "<p><strong>" . "Reparto:" . "</strong></p>" . $row['reparto'] . "<br>";

    echo "<p><strong>" . "Compañia:" . "</strong></p>" . $row['empresas'] . "<br>";

    echo "<p><strong>" . "Genero:" . "</strong></p>" . $row['genero'] . "<br>";

    echo "<p><strong>" . "Numero de episodios:" . "</strong></p>" . $row['numepisodios'] . "<br></div>";

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