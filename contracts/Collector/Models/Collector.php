<?php

namespace Vetor\Contracts\Collect\Collector\Models;

use Illuminate\Database\Eloquent\Builder;
use Vetor\Contracts\Collect\Collectable\Models\Collectable;
use Vetor\Contracts\Collect\Collectable\Models\Collectable as CollectableContract;

interface Collector
{
    /**
     * @return mixed
     */
    public function collections();

    /**
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $likeable
     * @return mixed
     */
    public function collect(Collectable $likeable);

    /**
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $likeable
     * @return mixed
     */
    public function cancelCollect(Collectable $likeable);

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $collectable
     * @return mixed
     */
    public function scopeWhereCollectable(Builder $query, CollectableContract $collectable);
}
