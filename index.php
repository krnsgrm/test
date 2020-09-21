<?php

require_once "spices/pepper.php";
require_once "spices/paprika.php";

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