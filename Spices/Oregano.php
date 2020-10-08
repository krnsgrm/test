<?php

namespace Spices;

class Oregano
{
    private string $oregano;

    public function __construct(string $oregano)
    {
        $this->oregano = $oregano;
    }

    public function getOregano(): string
    {
        return $this->oregano;
    }
}