<?php

namespace Spices;

class Paprika
{
    private string $paprika;

    public function __construct(string $paprika)
    {
        $this->paprika = $paprika;
    }

    public function getPaprika(): string
    {
        return $this->paprika;
    }
}