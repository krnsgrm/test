<?php

class Auto
{
    private $name;
    private $fuel;

    public function __construct(string $name, int $fuel)
    {
        $this->name = $name;
        $this->fuel = $fuel;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function fuel(): int
    {
        return $this->fuel;
    }
}

class Volvo extends Auto
{
    public function fuel(): int
    {
        $baka = parent::fuel();
        return $baka * 2;
    }
}

class Opel extends Auto
{
    public function name(): string
    {
        $name = parent::name();
        echo "this is $name";
    }
}

$volvo = new Volvo("Volvo", 50);
$opel = new Opel("Opel", 60);

if ($volvo instanceof Auto == true) {
    echo $volvo->name . ", " . $volvo->fuel . PHP_EOL;
}

if ($opel instanceof Auto == true) {
    echo $opel->name . ", " . $opel->fuel . PHP_EOL;
}