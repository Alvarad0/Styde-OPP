<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 8/05/18
 * Time: 09:17 AM
 */
abstract class Unit{
    protected $hp = 40;
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    private function setHp($poinst){
        $this->hp = $poinst;
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }
    public function getHp(){
        return $this->hp;
    }

    public function move($direction){
        show("{$this->name} avanza hacia $direction");
    }
    abstract function attack(Unit $oponent);

    public function _die(){
        show("{$this->name} muere");
    }

    public function takeDamage($damage){
        #Attack to opponent
        $this->setHp($this->hp - $damage);
        if ($this->hp <= 0){
            $this->_die();
        }
    }

}
