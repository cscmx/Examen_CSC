<?php

require_once 'farmacia.php';

$farmacia = new Farmacia();


$farmacia->addProducto(new Producto("Ibuprofeno", 3.5, "Novartis", 5, null));
$farmacia->addProducto(new Producto("Paracetamol", 2.5, "Farmacid", 10, 2));
$farmacia->addProducto(new Producto("Aspirina", 3, "Bayer", 15, 1.5));
$farmacia->addProducto(new Producto("Vitamina D", 5, "Suplementos Omega", 3, null));



print_r($farmacia->buscandoIgualOInferior(3.5));
print_r($farmacia->buscandoProductosEnOferta());

?>