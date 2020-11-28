<?php

require "../clases/inventario.php";

$inventario = new Inventario;
$inventario ->deleteInventario($_GET["idIte"]);
$idPue  =$_GET["idPue"];

header("Location:verInventario.php?idPue=$idPue");


