<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php
require "clases/Puesto.php";

$selectPuesto  = new Puesto;
$itemsDatabase =$selectPuesto->selectAll();

?>
<h1>Puestos</h1>
<a href="puesto/anadirPuesto.php" class="btn btn-dark float-right mr-5">Añadir puesto</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Puesto</th>
      <th scope="col">Ubicación</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
  foreach($itemsDatabase as $lista){
  ?>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $lista->getNombre()?></td>
      <td><?php echo$lista->getUbicacion()?></td>
      <td><a href="inventario/verInventario.php?idPue=<?php echo $lista->getIdPue();?>" class="btn btn-primary">Inventario</a></td>
    </tr>
  
  </tbody>
  <?php
}
?>
</table>

    ?>
</body>
</html>