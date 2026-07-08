<?php

require_once 'Producto.php';

class Farmacia 
{
    public array $productos = [];


    public function addProducto(Producto $producto): void 
    {
        array_push($this->productos, $producto);
    }

    //metodo de precios por valor igual o inferior 
    public function buscandoIgualOInferior(float $valor) : array //FUNCIONES EN VERBO 
    {
        $productosConValorIgualInferior = [];
        foreach ($this->productos as $producto)
            {
                if ($producto->getPrecio() <= $valor){
                    array_push($productosConValorIgualInferior,$producto);
                }
            }
            return $productosConValorIgualInferior;
    }

    //metodo que devuelva si hay productos en oferta
    public function buscandoProductosEnOferta() : array
    {
        $productosEnOferta = [];
        foreach($this->productos as $producto)
        {
            if (!is_null($producto->getPrecioOferta())) {
                
                array_push($productosEnOferta, $producto);
            }

        }
        return $productosEnOferta;
    }

}


?>