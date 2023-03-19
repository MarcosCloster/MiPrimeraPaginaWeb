<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

  <style>

    #direccion , #guion{

      height: 100px;

    }

    </style>

</head>
<body>
  
  <form action="registrar_series.php" method="post">

    <label for="titulo">Titulo: </label>
    <input type="text" name="titulo" id="titulo" placeholder="Titulo">
    
    <label for="fecha">Fecha: </label>
    <input type="date" name="fecha" id="fecha" placeholder="Fecha">

    <label for="direccion">Diretores: </label>
    <textarea name="direccion" id="direccion" placeholder="Directores" cols="30" rows="10"></textarea>

    <label for="guion">Guionista: </label>
    <textarea name="guion" id="guion" placeholder="Guionista" cols="30" rows="10"></textarea>

    <label for="musica">Musicos: </label>
    <input type="text" name="musica" id="musica" placeholder="Musicos">

    <label for="fotografia">Fotografo: </label>
    <input type="text" name="fotografia" id="fotografia" placeholder="Fotografo">

    <label for="reparto">Reparto: </label>
    <textarea name="reparto" id="reparto" placeholder="Reparto" cols="30" rows="10"></textarea>

    <label for="empresas">Empresas: </label>
    <input type="text" name="empresas" id="empresas" placeholder="Empresas">

    <label for="genero">Genero: </label>
    <input type="text" name="genero" id="genero" placeholder="Genero">

    <label for="numepisodios">Numero de episodios: </label>
    <input type="text" name="numepisodios" id="numepisodios" placeholder="En minutos">

    <label for="informacion">Informacion: </label>
    <textarea name="informacion" id="informacion" placeholder="Informacion" cols="30" rows="10"></textarea>

    <label for="sinopsis">Sinopsis: </label>
    <textarea name="sinopsis" id="sinopsis" placeholder="Sinopsis" cols="30" rows="10"></textarea>

    <label for="foto">Foto chica: </label>
    <input type="text" name="foto" id="foto" placeholder="img/.../...">

    <label for="fotog">Foto grande: </label>
    <input type="text" name="fotog" id="fotog" placeholder="img/.../...">

    <input type="submit" value="Registrar" name="registrar" id="registrar">

  </form>

</body>
</html>