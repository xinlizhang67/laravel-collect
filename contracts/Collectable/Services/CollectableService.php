<?php

namespace Vetor\Contracts\Collect\Collectable\Services;

use Vetor\Contracts\Collect\Collectable\Models\Collectable as CollectableContract;

interface CollectableService
{
    public function addCollectionTo(CollectableContract $collectable, $userId);

    public function removeCollectionFrom(CollectableContract $collectable, $userId);

}
