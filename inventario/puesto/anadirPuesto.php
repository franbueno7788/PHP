<?php
require "../clases/Puesto.php";
if(!empty($_POST)){

    $puesto = new Puesto;
    $puesto->addPuesto($_POST["nombre"], $_POST["ubi"] ,$_POST["planta"],$_POST["num"]);
  
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    form{
        width:60%;
        margin:auto;
        text-align:center;
    }
  
    form input{
        
        text-align:center;
    }
    </style>
</head>
<body>
<form id ="formAnadir" action="" method="POST">
<h1 class="mt-5">Añadir Puesto</h1>
  <div class="form-group mt-5">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  
  </div>
  <div class="form-group">
    <label for="ubicacion">Ubicación</label>
    <input type="text" class="form-control" id="ubicacion" name="ubi" placeholder="ubicación">
  
  </div>
  <div class="form-group">
    <label for="planta">planta</label>
    <input type="number" class="form-control" id="planta"  name="planta" placeholder="planta">
  
  </div>
  <div class="form-group">
    <label for="num">número</label>
    <input type="number" class="form-control" id="num"  name="num" placeholder="número">
  
  </div>
  
</form>
<div class="d-flex justify-content-center " >
<button form="formAnadir" type="submit" class="btn btn-primary mx-2">Guardar</button>
<a href="../index.php" type="submit" class="btn btn-danger mx-2">cancelar</button>
</div>
</body>
</html>