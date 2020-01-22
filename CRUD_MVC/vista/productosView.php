<!doctype html>
<html lang="es">

<head>

</head>

<body>
<?php
foreach ($matrizProductos as $registro){

    echo $registro["ID"]."  ".$registro["Código"]."  ".$registro["Nombre"]."  ".$registro["País"]."  ".$registro["precio"]." <br> ";

}
?>

</body>
</html>









