<?php

namespace Vetor\Contracts\Collect\Collector\Models;

use Vetor\Contracts\Collect\Collectable\Models\Collectable;

interface Collector
{
    public function collect(Collectable $likeable);

    public function cancelCollect(Collectable $likeable);
}
