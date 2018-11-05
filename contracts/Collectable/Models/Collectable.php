<?php

namespace Vetor\Contracts\Collect\Collectable\Models;

interface Collectable
{
    /**
     * @return mixed
     */
    public function getKey();

    /**
     * @return string
     */
    public function getMorphClass();

    /**
     * @return mixed
     */
    public function collections();
}
