<?php

abstract class Food {
    abstract public function getName(): string;

    public function Hi(): string
    {
        return "Hi,Customer";
    }
}

Class Burger extends Food {
    public function getName(): string
    {
        return "CheeseBurger";
    }
}
class Snikers extends Food {
    public function getName(): string
    {
        return "RedSnikers";
    }
}


abstract class FoodFactory {
    abstract public function create(): Food;
}

class SnikersFctory extends FoodFactory {
    public function create(): Snikers
    {
        return new Snikers;
    }
}

class BurgerFactory extends FoodFactory {
    public function create(): Burger
    {
        return new Burger;
    }
}

$snikersFactory =
$burgerFactory = new BurgerFactory();
// echo "Содержимое БургерФабрики" . $burgerFactory;
$burger = $burgerFactory->create();
$burger->Hi();

echo "Фабрик создала Бургер: " . $burger->getName() . "\n";

var_dump($burgerFactory);

