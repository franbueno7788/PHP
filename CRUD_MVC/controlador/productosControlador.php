<?php


require_once "modelo/productosModelo.php";

$producto = new productos_model();
$matrizProductos =$producto->get_productos();


require_once "vista/productosView.php";


