<?php

class Auto
{
    public $name;
    public $baka;

    public function __construct(string $name, int $baka)
    {
        $this->name = $name;
        $this->baka = $baka;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function baka(): int
    {
        return $this->baka;
    }
}

class Volvo extends Auto
{
    public function baka(): int
    {
        $baka = parent::baka();
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
    echo $volvo->name . ", " . $volvo->baka . PHP_EOL;
}

if ($opel instanceof Auto == true) {
    echo $opel->name . ", " . $opel->baka . PHP_EOL;
}