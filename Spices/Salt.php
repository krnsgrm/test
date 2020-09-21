<?php

namespace Spices;

class Salt
{
    private string $salt;

    public function __construct(string $salt)
    {
        $this->salt = $salt;
    }

    public function getSalt(): string
    {
        return $this->salt;
    }
}