<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

  <style>



    </style>

</head>
<body>
  
  <form action="registrarpelis.php" method="post">

    <label for="foto">Foto: </label>
    <input type="text" name="foto" id="foto" placeholder="img/.../...">
    
    <label for="fotog">Foto Grande: </label>
    <input type="text" name="fotog" id="fotog" placeholder="img/.../...">

    <label for="titulo">Titulo: </label>
    <input type="text" name="titulo" id="titulo" placeholder="Ingresa el titulo">
    
    <label for="informacion">Informacion: </label>
    <textarea name="informacion" id="informacion" placeholder="Informacion" cols="30" rows="10"></textarea>

    <label for="fecha">Fecha: </label>
    <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha">

    <label for="duracion">Duracion: </label>
    <input type="text" name="duracion" id="duracion" placeholder="En minutos">

    <label for="direccion">Directores: </label>
    <textarea name="direccion" id="direccion" placeholder="Directores" cols="30" rows="10"></textarea>

    <label for="produccion">Productores: </label>
    <input type="text" name="produccion" id="produccion" placeholder="Productores">

    <label for="guion">Guionistas: </label>
    <input type="text" name="guion" id="guion" placeholder="Guionistas">

    <label for="musica">Musicos: </label>
    <input type="text" name="musica" id="musica" placeholder="Musicos">

    <label for="fotografia">Fotografo: </label>
    <input type="text" name="fotografia" id="fotografia" placeholder="Fotografo">

    <label for="vestuario">Vestuarista: </label>
    <input type="text" name="vestuario" id="vestuario" placeholder="Vestuarista">

    <label for="reparto">Reparto: </label>
    <textarea name="reparto" id="reparto" placeholder="Reparto" cols="30" rows="10"></textarea>

    <label for="genero">Genero: </label>
    <input type="text" name="genero" id="genero" placeholder="Genero">

    <label for="compania">Empresas: </label>
    <input type="text" name="compania" id="compania" placeholder="Empresas">

    <label for="presupuesto">Presupuesto: </label>
    <input type="text" name="presupuesto" id="presupuesto" placeholder="Presupuesto">

    <label for="recaudacion">Recaudado: </label>
    <input type="text" name="recaudacion" id="recaudacion" placeholder="Recaudado">

    <label for="sinopsis">Sinopsis: </label>
    <textarea name="sinopsis" id="sinopsis" placeholder="Sinopsis" cols="30" rows="10"></textarea>

    <input type="submit" value="Registrar" name="registrar" id="registrar">

  </form>

</body>
</html>