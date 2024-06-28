<?php

namespace App\Processor;

abstract class BaseProcessor
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    abstract public function processData(): mixed;
}
