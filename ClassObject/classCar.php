<?php
// Creation class Car
class Car{
    // Propertyes
    var $marca;
    var $model;
    var $color;
    var $num_puertas;

    //Method __construct for validation data
    function __construct($marca, $model, $color, $num_puertas){
        $this->marca = $marca;
        $this->model = $model;
        $this->color = $color;
        $this->num_puertas = $num_puertas;
    }

    // Method Star Car
    function starCar(){
        return "El carro Arranco";
    }

    // Method Play Music
    function playMusic(){
        return "Estoy escuhando musica";
    }
}

// Creation object
$car1 = new Car('Toyota', '2017', 'Rojo', '4');

//Out data
echo $car1->starCar().'<br>';
echo $car1->playMusic().'<br>';
echo "La marca del carro es: ".$car1->marca.'<br>';
echo "El modelo del carro es: ".$car1->model.'<br>';
echo "El color del carro es: ".$car1->color.'<br>';
echo "El carro tiene ".$car1->num_puertas." puertas".'<br>';