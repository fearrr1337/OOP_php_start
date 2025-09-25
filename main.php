<?php

class Person
{

    protected string $name;
    protected int $age;  // protected - Модификатор досутупа, как нужно обращаться к коду из внешнеего объекта, контролирует уровни доступа к свойствам объекта.

    static $retirementAge = 65;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string // Возвращает значение свойства
    {
        return $this->name;
    }

    public function setName(string $name) //Возвращает значение свойства
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    // $this - это указатель контекста
    public function displayInfo()
    {
        echo "Меня зовут " . $this->getName() . "\nмне " . $this->getAge() . " лет" . "\n";
    }

    static function workAge(Person $person) {
        echo "\nДо пенсии еще " . Person::$retirementAge-$person->age . " лет\n";
    }
}

$Eric = new Person("Eric", 25);
$Eric->displayInfo();
Person::workAge($Eric);


class Emplooe extends Person
{

    protected $salary;
    static private $bilding = "Центральное здание";

    public function __construct($name, $age, $salary)
    {
        parent::__construct($name, $age); // parent - обращение к родительскому классу
        $this->salary = $salary;
    }

    static function getBuinlding() {
        return self::$bilding; // self заменяется на класс, в которм этот метод. В данном случае класс Emploee
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function displayEmploeeInfo() {
        parent::displayInfo();
        echo "\nSalary: " . $this->salary;
    }

    static function workPlace() {
        echo "\nЯ работаю в " . self::$bilding;
    }

    function __destruct() {
        echo "\nВызван метод destruct";
    }
}

$worker1 = new Emplooe("Олег", 30, 30000);
$worker1->displayEmploeeInfo();
Emplooe::workAge($worker1);
Emplooe::workPlace();
