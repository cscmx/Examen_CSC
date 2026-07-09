<?php

require_once 'farmacia.php';

$farmacia = new Farmacia();

$productosDeFarmacia = [
    (new Producto("Ibuprofeno", 3.5, "Novartis", 5, null)),
    (new Producto("Paracetamol", 2.5, "Farmacid", 10, 2)),
    (new Producto("Aspirina", 3, "Bayer", 15, 1.5)),
    (new Producto("Vitamina D", 5, "Suplementos Omega", 3, null)),
    (new Producto("", 7, "Suplementos Omega", 3, null))
];

foreach($productosDeFarmacia as $producto){
    $farmacia->addProducto($producto);
}


print_r($farmacia->buscandoIgualOInferior(3.5));
print_r($farmacia->buscandoProductosEnOferta());


foreach($productosDeFarmacia as $producto){
    echo $producto->__toString();
}

?>

