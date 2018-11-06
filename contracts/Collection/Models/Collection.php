<?php

namespace Vetor\Contracts\Collect\Collection\Models;

use Illuminate\Database\Eloquent\Builder;
use Vetor\Contracts\Collect\Collectable\Models\Collectable as CollectableContract;

interface Collection
{
    /**
     * @return mixed
     */
    public function collectable();

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $collectable
     * @return mixed
     */
    public function scopeWhereCollectable(Builder $query, CollectableContract $collectable);
}
