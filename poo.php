<?php

class Automovil
{

    public $color;
    public $motor;
    public $marca;
    protected $modelo;
    protected $puertas;



    function index()
    {
    }

    function create($marca, $motor, $color)
    {

        $this->marca = $marca;
        $this->motor = $motor;
        $this->color = $color;

        echo 'Marca: ' . $this->marca . '<br>';
        echo 'moto: ' . $this->motor . '<br>';
        echo 'color: ' . $this->color . '<br>';
    }

    function cambiarMarca($marca)
    {
        $this->marca = $marca;

        echo '<li>Maraca Cambiada a: ' . $this->marca . '</li>';
    }

    function update()
    {
    }

    function delete()
    {
    }
}


$autormovil = new Automovil;

$autormovil->create('Honda', 'v8', 'azul');
$autormovil->cambiarMarca('Toyota');

echo '<br>' . $autormovil->color . '<br>' . $autormovil->marca . '<br>' . $autormovil->motor;

 