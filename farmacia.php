<?php

require_once 'Producto.php';

class Farmacia 
{
    public array $productos = [];

    public function __construct()
    {

    }

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

    //la primera opción que pensé fue colocar precio oferta igual a precio en los que tenían que ir tipo NULL. Después hacer una comparación entre precio y precio oferta para ver si precio oferta era menor. Finalmente utilicé null, pero como no lo tenía muy claro miré documentación (no usé AI, i promise).
     
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