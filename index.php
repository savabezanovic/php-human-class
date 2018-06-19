<html>
<?php

class Human{

    private $gender;
    private $name;
    private $age;

    public function __construct($gender, $name, $age){
        $this->gender = $gender;
        $this->name = $name;
        $this->age = $age;
    
    }

    public function getGender(){
        return $this->gender;
    }   

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

}

class female extends Human{

    private $hairColor;
    private $hairLenght; 

    public function __construct($gender, $name, $age, $hairColor, $hairLenght){
        parent::__construct($gender, $name, $age);

        $this->hairColor  = $hairColor;
        $this->hairLenght = $hairLenght; 
    }

    public function  getHairColor(){
        return $this->hairColor;
    }

    public function getHairLenght(){
        return $this->hairLenght;
    }
}

class male extends Human{

    private $hairColor;
    private $hairStyle;

    public function __construct($gender, $name, $age, $hairColor, $hairStyle){
        parent::__construct($gender, $name, $age);

        $this->hairColor = $hairColor;
        $this->hairStyle = $hairStyle; 
    }

    public function getHairColor(){
        return $this->hairColor;
    }

    public function getHairStyle(){
        return $this->hairStyle;
    }
}


$malePerson = new male('male', 'Sava Bezanovic', '21', 'blue', 'mans bum');
$femalePerson = new female('female', 'Marija Ljubic', '20', 'blue', 'shaved by side');



echo "Hi, My name is {$malePerson->getName()}, {$malePerson->getAge()} years of age 
        {$malePerson->getGender()} I also have {$malePerson->getHairColor()} hair and a {$malePerson->getHairStyle()} hair style.";

echo "<br>";

echo "Hi, My name is {$femalePerson->getName()}, {$femalePerson->getAge()} years of age {$femalePerson->getGender()} I also have {$femalePerson->getHairColor()} hair and a {$femalePerson->getHairLenght()} hair style.";

?>

</html>