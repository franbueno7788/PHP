<?php

require "../clases/Inventario.php";

$inventario = new Inventario();

echo $_GET["idPue"];
$items = $inventario->getInventario($_GET["idPue"]);

?>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
    
</head>
<body>

    <?php
require "../clases/Puesto.php";

$selectPuesto  = new Puesto;
$itemsDatabase =$selectPuesto->selectAll();

?>
<h1>Inventario mercado</h1>
<a href="anadirProducto.php?idPue=<?php echo $_GET["idPue"]?>" class="btn btn-dark float-right mr-5">Añadir producto</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Stock</th>
      <th scope="col">Alta</th>
    </tr>
  </thead>
  <?php
  foreach($items as $lista){
  ?>
  <tbody>
  
    <tr id ="editAction">
      <th scope="row">1</th>
       <td ><?php echo $lista->getItem()?></td></div>
      <td ><?php echo$lista->getStock()?></td></div>
      <td><?php echo$lista->getAlta()?></td>
      </div>
      <td><a href="editItem.php?idIte=<?php echo $lista->getIdIte() ?>& idPue=<?php echo $lista->getIdPue() ?> 
      & item=<?php echo $lista->getItem()  ?>
       & stock=<?php echo $lista->getStock()  ?>
       & alta=<?php echo $lista->getAlta()  ?>  "  id ="btnEdit" class=" btn btn-primary">Editar</a>
      <a href="borrarInventario.php?idIte=<?php echo $lista->getIdIte() ?>& idPue=<?php echo $lista->getIdPue() ?>" class="btn btn-primary">Borrar</a></td>
    </tr>
  
  </tbody>
  <?php
}
?>

</table>
<div class="d-flex justify-content-center " >
<a href="../index.php" type="button" class="btn btn-danger ">Volver atrás</button>
</div>
<!-- NOTA: Intenté crear un evento con jquery que me generase un formulario en la fila del botón pulsado, pero no me salió
    /*<script>
    $(  "a[id='btnEdit']" ).click(function() {
     
      $(  "tr[id='editAction']" ).html("<form><div class='form-group'><label for='nombre'>Nombre del producto</label><input type='text' class='form-control' id='nombre' aria-describedby='nombre'></div><a href=''  class='btn btn-primary'>modificar</button> <a href=''  class='btn btn-danger'>cancelar</button>")
});
    </script>
    */
    -->
</body>
</html>