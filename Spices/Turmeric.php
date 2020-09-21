<?php

namespace Spices;

class Turmeric
{
    private string $turmeric;

    public function __construct(string $turmeric)
    {
        $this->turmeric = $turmeric;
    }

    public function getTurmeric(): string
    {
        return $this->turmeric;
    }
}
