<?php

$files = glob(__DIR__ . '/Spices/*.php');

foreach ($files as $file) {
    require($file);
}

use Spices\Pepper;
use Spices\Paprika;
use Spices\Turmeric;
use Spices\Salt;
use Spices\Oregano;

$pepper = new Pepper('pepper');
var_dump($pepper->getPepper());

$paprika = new Paprika('paprika');
var_dump($paprika->getPaprika());

$turmeric = new Turmeric('turmeric');
var_dump($turmeric->getTurmeric());

$salt = new Salt('salt');
var_dump($salt->getSalt());

$salt = new Oregano('oregano');
var_dump($salt->getOregano());