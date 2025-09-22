<?php

class Animal {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal {

    protected $poroda;
    public function __construct($name, $poroda)
    {
        parent::__construct($name);
        $this->poroda = $poroda;
    }
}

// $Alice = new Cat("Alice", "Siamese");


interface Consumer {
    public function consume(Cat $animal): void;
}

class CatConsumer implements Consumer {
    public function consume(Cat $animal): void
    {

    }
}