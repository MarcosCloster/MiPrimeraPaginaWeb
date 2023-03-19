<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

</head>
<body>
  
  <form action="registrar_productos.php" method="post">

    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto">
    
    <label for="informacion">Informacion: </label>
    <input type="text" name="informacion" id="informacion" placeholder="Informacion del producto">

    <label for="precio">Precio: </label>
    <input type="text" name="precio" id="precio" placeholder="Precio del producto">

    <label for="foto">Foto: </label>
    <input type="text" name="foto" id="foto" placeholder="Foto del producto">

    <input type="submit" value="Registrar" name="registrar" id="registrar">

  </form>

</body>
</html>