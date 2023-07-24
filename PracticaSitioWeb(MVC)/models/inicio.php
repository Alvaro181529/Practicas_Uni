<?php
class inicio
{
    public $precio;
    public $cantidad;

    function getPrecio()
    {
        return $this->precio;
    }
    function getCantidad()
    {
        return $this->cantidad;
    }

    function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    
}
