<?php

namespace Vetor\Laravel\Collect\Collectable\Models\Traits;

use Vetor\Contracts\Collect\Collection\Models\Collection as CollectionContract;

trait Collectable
{
    public function collections()
    {
        return $this->morphMany(app(CollectionContract::class), 'collectable');
    }
}
