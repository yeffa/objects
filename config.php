<?php

namespace core;

use ArrayAccess;

class Config implements ArrayAccess
{
    private array $hashmap;

    public function __construct(string $path)
    {
        $this->hashmap = require dirname(__DIR__) . "/" . $path;
    }

    public function offsetExists($offset): bool
    {
        if (isset($this->hashmap[$offset])) {
            return true;
        }
        return false;
    }

    public function offsetGet($offset): mixed
    {
        return $this->hashmap[$offset];
    }

    public function offsetSet($offset, $value): void
    {
        $this->hashmap[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->hashmap[$offset]);
    }
}
