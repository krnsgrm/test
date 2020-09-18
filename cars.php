<?php

// Izveidot mašīnas objektu (nav nepieciešams izmantot mantošanu / inheritance)
// Auto ir marka, numura zīme, bākas tilpums (max)
// Pie jauna objekta izveides bāka ir pilna

// Izveido programmu, kas šo auto darbina braucot ar statisku ātrumu (nav nozīmes)
// Uz ekrāna tiek katru sekundi izvadīts nobrauktie 10 kilometri, kas uzrāda marku, numura zīmi, bākas AKTUĀLO TILPUMU.

// Iesniegšana
// Izveidot jaunu branch ar nosakumu TASK-4
// Darbu iesniegt classroomā ar linku uz ATVĒRTU PR.


// 2.
// Pievienot odometru, kas skaita līdzi kāds ir auto kopējais nobraukums. (restartējot aplikāciju odometrs būs 0!!!)

// 3.
// Pievienot opciju izvēlēties auto no saraksta (palaižot aplikāciju izdrukājas saraksts ar pieejamajiem auto)
// Ievadot skaitli vai nosaukumu izvēlas kuru auto darbinās

// 4.
// Pievienot objektam/opciju auto iestartēt ar speciāli izvēlētu pin kodu (katram auto unikāls)
// izvēloties auto no saraksta, piedāvā iedarbināt auto, ievadot pin kodu, pin kods, ja 3x ir n

class Car
{

    private string $brand;
    private string $number;
    private int $fuelNow;
    private int $fuelMax;
    private string $pin;

    public function __construct(string $brand, string $number, int $fuelMax, string $pin)
    {
        $this->brand = $brand;
        $this->number = $number;
        $this->fuelNow = $fuelMax;
        $this->fuelMax = $fuelMax;
        $this->pin = $pin;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getFuelNow(): int
    {
        return $this->fuelNow;
    }

    public function fuelUse()
    {
        $this->fuelNow -= 1;
    }

    public function getPin(): string
    {
        return $this->pin;
    }

//    public function getFuelUse()
//    {
//        $this->fuelUse;
//    }
}

$volvo = new Car("Volvo", "LV5555", 50, "1111");
$opel = new Car("Opel", "LV-4444", 40, "2222");
$fiat = new Car("Fiat", "LV-3333", 30, "3333");
$bmw = new Car("BMW", "LV-2222", 20, "4444");

echo "Our cars: " . PHP_EOL;

$cars = [$volvo, $opel, $fiat, $bmw];

foreach ($cars as $car) {
    echo $car->getBrand() . ", plate number " . $car->getNumber() . " and fuel " . $car->getFuelNow();
    echo ", fuel consumption:" . $car->getFuelNow() . PHP_EOL;
}

$choose = (int)readline("Choose a car from 0-3: ");
$realCar = $cars[$choose];
$pin = (int)readline("Enter pin to unlock this car(" . $realCar->getBrand() . "): ");

$tries = 1;
while ($pin != $realCar->getPin() && $tries <= 2) {
    echo "Wrong pin, try again" . PHP_EOL;
    $pin = (string)readline("Enter pin to unlock this car(" . $realCar->getBrand() . "): ");
    $tries++;
}

if ($tries == 3) {
    echo "Sorry, try again" . PHP_EOL;
}

if ($pin == $realCar->getPin()) {
    $km = 0;
    while ($realCar->getFuelNow() > 0) {
        if ($km += 10) {
            $realCar->FuelUse();
            echo "KM drived: " . $km . " with car number " . $realCar->getNumber() . " and car brand ";
            echo $realCar->getBrand() . ": " . $realCar->getFuelNow() . " liters left to drive" . PHP_EOL;
            usleep(500000);
        } else {
            echo "Something went wrong";
        }
    }
}

if ($realCar->getFuelNow() == 0) {
    echo "Thank you for using our services, see you again in the future!" . PHP_EOL;
}

