<?php
// Creation of class || Object
class Person{
    // Creation of properties of class
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $changedNickName = 0;
    protected $birthday;

    // Creation of Method __construct for validation data
    public function __construct($firstName, $lastName, $birthday){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
    }

    // Seeter edit data
    public function setNickName($nickname){
        // Condition to limit change of NickName
        if($this->changedNickName >=2){
            throw new Exception("You can´t change a nickname more than 2 times");
        }
        // Condition to verify that it has 2 characters
        elseif(strlen($nickname) <2){
            throw new Exception("The Nickname must be at least 2 characters");  
        }
        // Condiction to validate that Nickname is different from fisrtName and lastName
        elseif($nickname == $this->firstName || $nickname == $this->lastName){
            throw new Exception("The Nickname must be different from name and lastname");
        }
        $this->nickname = $nickname;
        $this->changedNickName++;
    }

    //Geeter Nickname
    public function getNickName(){
        return $this->nickname;
    }

    //Geeter for show data
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }

    // Creation of Method fullnNem into clas
    public function getFullName(){
        return $this->firstName .' '. $this->lastName;
    }

    public function getBirthday(){
        return $this->birthday;
    }

    //Methos to calculate age
    public function getAge(){
        list($day, $month, $year) = explode('/', $this->birthday );
        $day_dif = date('d') - $day;
        $month_dif = date('m') - $month;
        $year_dif = date('Y') - $year;
        if ($day_dif < 0 || $month_dif < 0){
            $year_dif--;
        }
        $this->age = $year_dif;
         return $this->age;
            }
}

// Create object of class 
$person1 = new Person('Daniel', 'Alvarado', '10/09/1992');
$person1->setNickName('Hernandez');
//$person1->setNickName('Danielamsdgajsgdkj');//Exception
//exit($person1->getNickName());
//exit($person1->getAge());;
// Out data
echo "La persona ".$person1->getFullName()." tiene como Nickname ".$person1->getNickName()." y su edad es: ".$person1->getAge();