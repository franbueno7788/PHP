<?php
require "../clases/Inventario.php";
if(!empty($_POST)){
    
   
    $inventario = new Inventario;
    $inventario->updateInventario($_GET["idIte"], $_POST["item"] ,$_POST["stock"] );
  



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
<h1 class="mt-5">Editar producto</h1>
  <div class="form-group mt-5">
    <label for="item">Item</label>
    <input type="text" class="form-control" id="item" name="item" placeholder="item" value=<?php echo $_GET["item"] ?>>
  
  </div>
  <div class="form-group">
    <label for="ubicacion">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" placeholder="stock" value=<?php echo $_GET["stock"] ?> >
  
  </div>
  <div class="form-group">
    <label for="alta">alta</label>
    <input type="date" class="form-control" id="alta"  name="alta" placeholder="alta" value=<?php echo $_GET["alta"] ?> disabled>
  
  </div>
  
  
</form>
<div class="d-flex justify-content-center " >
<button form="formAnadir" type="submit" class="btn btn-primary mx-2">Guardar</button>
<a href="verInventario.php?idPue=<?php echo $_GET['idPue']?>" type="submit" class="btn btn-danger mx-2">cancelar</button>
</div>
</body>
</html>