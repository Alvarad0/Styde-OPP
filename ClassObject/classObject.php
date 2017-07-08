<?php
// Creation of class || Object
class Person{
    // Creation of properties of class
    var $firstName;
    var $lastName;

    // Creation of Method __construct for validation data
    function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // Creation of Method fullnNem into clas
    function fullName(){
        return $this->firstName .' '. $this->lastName;
    }
}

// Create object of class 
$person1 = new Person('Daniel', 'Alvarado');
$person2 = new Person('Krizz', 'Rodriguez');

// Out data
echo "{$person1->fullName()} es amigo de {$person2->fullName()}";