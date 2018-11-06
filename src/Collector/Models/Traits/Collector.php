<?php

namespace Vetor\Laravel\Collect\Collector\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Vetor\Contracts\Collect\Collection\Models\Collection as CollectionContract;
use Vetor\Contracts\Collect\Collectable\Models\Collectable as CollectableContract;
use Vetor\Contracts\Collect\Collectable\Services\CollectableService as CollectableServiceContract;

trait Collector
{
    /**
     * @return mixed
     */
    public function collections()
    {
        return $this->hasMany(app(CollectionContract::class), $this->getKey(), 'user_id');
    }

    /**
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $collectable
     */
    public function collect(CollectableContract $collectable)
    {
        app(CollectableServiceContract::class)->addCollectionTo($collectable, $this);
    }

    /**
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $collectable
     */
    public function cancelCollect(CollectableContract $collectable)
    {
        app(CollectableServiceContract::class)->removeCollectionFrom($collectable, $this);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param \Vetor\Contracts\Collect\Collectable\Models\Collectable $collectable
     * @return mixed
     */
    public function scopeWhereCollectable(Builder $query, CollectableContract $collectable)
    {
        return $query->with(['collections' => function ($query) use ($collectable) {
            $query->where('collectable_type', $collectable->getMorphClass());
        }]);
    }
}
