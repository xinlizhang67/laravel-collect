<?php

namespace Vetor\Laravel\Collect\Collector\Models\Traits;

use Vetor\Contracts\Collect\Collectable\Models\Collectable as CollectableContract;
use Vetor\Contracts\Collect\Collectable\Services\CollectableService as CollectableServiceContract;

trait Collector
{
    public function collect(CollectableContract $collectable)
    {
        app(CollectableServiceContract::class)->addCollectionTo($collectable, $this);
    }

    public function cancelCollect(CollectableContract $collectable)
    {
        app(CollectableServiceContract::class)->removeCollectionFrom($collectable, $this);
    }
}
