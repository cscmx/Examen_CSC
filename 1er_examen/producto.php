<?php

class Producto
{
    //atributos
    private string $nombre;
    private float $precio;
    private string $laboratorio;
    private int $cantidad;
    private ?float $precioOferta; //PUEDE NO TENER OFERTA - Nullable - ?  


    //constructor 
    public function __construct(string $nombre, float $precio, string $laboratorio, int $cantidad, ?float $precioOferta = null)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->laboratorio = $laboratorio;
        $this->cantidad = $cantidad;
        $this->precioOferta = $precioOferta; 

    }

    //getters
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getPrecio(): float {
        return $this->precio;
    }
    public function getLaboratorio(): string {
        return $this->laboratorio;
    }
    public function getCantidad(): int {
        return $this->cantidad;
    }
    public function getPrecioOferta(): ?float {
        return $this->precioOferta;
    }
    
    

    //setters
    public function setNombre (string $nombre) {
        $this->nombre = $nombre;
    }
    public function setPrecio (float $precio) {
        $this->precio = $precio;
    }
    public function setLaboratorio (string $laboratorio) {
        $this->laboratorio = $laboratorio;
    }
    public function setCantidad (int $cantidad) {
        $this->cantidad = $cantidad;
    }
    public function setPrecioOferta (?float $precioOferta) {
        $this->precioOferta = $precioOferta;
    }

    public function __toString() : string {
        
        $toStringPersonalizado = "";
        
        if (is_null($this->precioOferta) )
        {
            $toStringPersonalizado = "$this->nombre es producido por el laboratorio: $this->laboratorio, tiene un precio de $this->precio y hay un stock de $this->cantidad".PHP_EOL;

        } else 
        {
            $toStringPersonalizado = "$this->nombre es producido por el laboratorio: $this->laboratorio, tiene un precio de $this->precio y hay un stock de $this->cantidad y está en oferta con este precio: $this->precioOferta".PHP_EOL;
        }

        return $toStringPersonalizado;
        
    }

    }



?>
