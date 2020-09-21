<?php

require_once "Spices/Pepper.php";
require_once "Spices/Paprika.php";
require_once "Spices/Turmeric.php";
require_once "Spices/Salt.php";

use Spices\Pepper;
use Spices\Paprika;
use Spices\Turmeric;
use Spices\Salt;

$pepper = new Pepper('pepper');
var_dump($pepper->getPepper());

$paprika = new Paprika('paprika');
var_dump($paprika->getPaprika());

$turmeric = new Turmeric('turmeric');
var_dump($turmeric->getTurmeric());

$salt = new Salt('salt');
var_dump($salt->getSalt());