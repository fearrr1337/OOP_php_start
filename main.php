<?php

class Person {
    protected $name, $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // $this - это указатель контекста
    public function displayInfo() {
        echo "Меня зовут " . $this->setName(). "мне ". $this->setAge() . "год" . "\n";
    }
}

//$Artem = new Person('Артем', 21);
//$Artem->displayInfo();
//
//$Sergey = new Person('Сергей', 22);
//$Sergey->displayInfo();
//// echo "Меня зовут " . $Artem->setName(). "мне ". $Artem->setAge() . "год";
///

class Emplooe extends Person{

    protected $salary, $workExperience;
    public function  __construct($name, $age, $salary, $workExperience)
    {
        parent::__construct($name, $age); // parent - обращение к родительскому классу
        $this->salary = $salary;
        $this->workExperience = $workExperience;
    }
}