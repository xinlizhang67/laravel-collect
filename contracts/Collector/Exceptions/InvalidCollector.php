<?php

namespace Vetor\Contracts\Collect\Collector\Exceptions;

use RuntimeException;

class InvalidCollector extends RuntimeException
{
    public static function notDefined()
    {
        return new static('Collector not defined.');
    }
}
