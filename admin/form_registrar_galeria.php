<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

  <style>
/*
    form{
      width: 415px;
      height: 1320px;
      padding: 10px;
      background-color:#ccc;
      border: 10px solid #000;
    }

    label{
      margin-top: 10px;
      margin-left: 10px;
      padding: 1px;
    }

    input{
      margin-left:10px;
      margin-top: 10px;
      margin-bottom: 10px;
      width: 390px;
      height: 30px;
    }

    #enviar{
      margin-left: 100px;
      margin-top:10px;
      background-color:#f20;
      color:#fff;
      width: 200px;
    }
*/
    </style>

</head>
<body>
  
  <form action="registrar_galeria.php" method="post">

    <label for="foto">Foto: </label>
    <input type="text" name="foto" id="foto" placeholder=".../.../...">
    
    <input type="submit" value="Registrar" name="registrar" id="registrar">

  </form>

</body>
</html>