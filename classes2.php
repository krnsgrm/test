<?php declare(strict_types=1);

class Person
{
    protected string $name;
    protected string $surname;
    protected ?string $middlename;

    public function __construct(string $name, string $surname, string $middlename = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->middlename = $middlename;

    }

    public function fullname($name, $surname, $middlename)
    {
        echo $name, $middlename, $surname;
    }

}

$person = new Person('Karīna',  'Ozola');

$person2 = new Person('Ilze', 'Bērziņa','Anna');

$person3 = new Person('Una',  'Edite','Anna',);

var_dump($person, $person2, $person3);

// echo $person; ???