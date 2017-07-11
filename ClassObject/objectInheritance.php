<?php
abstract class Unit{
    protected $alive = true;
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function move($direction){
        echo "<p>{$this->name} avanza hacia $direction</p>";
    }
    abstract function attack($oponent);
}

class Soldier extends Unit{
    public function attack($oponent){
        echo "<p>{$this->name} corta a $oponent en dos</p>";        
    }
}

class Archer extends Unit{
    public function attack($oponent){
        echo "<p>{$this->name} dispara una fleca a $oponent</p>";
    }
}
$silence = new Soldier ('Alvarado');
$silence->move('el norte');
$silence->attack('Ramm');