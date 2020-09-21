<?php

class Pepper
{
    private string $pepper;


    public function __construct(string $pepper)
    {
        $this->pepper = $pepper;
    }

    public function getPepper(): string
    {
        return $this->pepper;
    }
}