<?php

class Animal
{
    protected $name;
    public $weight;
    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function getInfo()
    {
        echo "Con vật có tên {$this->name} có cân nặng {$this->weight}<br />";
    }

    //Setter getter
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}

//Kế thừa
class Dog extends Animal
{
    public $color;
    public function __construct($name, $weight, $color)
    {
        parent::__construct($name, $weight);
        $this->color = $color;
    }
    public function say()
    {
        echo "{$this->name} đang nói Gâu gâu ...<br />";
    }
}

$dog = new Dog('Cậu vàng', 15, 'Vàng');

// var_dump($dog);
$dog->say();
$dog->getInfo();

$animal = new Animal("Cậu vàng", 15);

echo $animal->getName();
$animal->setName('Cậu Bạc');
echo "<br />" . $animal->getName();
// $animal->name = "Cậu bạc";
// $animal2 = new Animal("Tom", 7);
// $animal3 = new Animal("Jerry", 0.6);

// $animal->getInfo();
// $animal2->getInfo();
// $animal3->getInfo();
// var_dump($animal);
