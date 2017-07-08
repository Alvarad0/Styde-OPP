<?php
// Creation class Phone
class Phone{
    var $model;
    var $color;
    var $company;

    // Creation of Method __construct for validation data
    function __construct($model, $color, $company){
        $this->model = $model;
        $this->color = $color;
        $this->copany = $company;
    }

    // Creation of Mtehod Call into class
    function call(){
        return "Estoy llamando a otro Telefono";
    }

    // Cretation of Methos SMS into class
    function sms(){
        return "Estoy enviando un Mensaje de texto";
    }
}

// Create object of class
$nokia = new Phone('Nokia', 'Blanco', 'Movistar');

// Out data
echo $nokia->call().'<br>';// To Print content of method
echo $nokia->sms().'<br>';// To Print content of method
echo "El telefono es de color: ".$nokia->color;// To Print property of class