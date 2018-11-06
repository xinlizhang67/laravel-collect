<?php

namespace Vetor\Laravel\Collect\Collectable\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\JoinClause;
use Vetor\Contracts\Collect\Collection\Models\Collection as CollectionContract;

trait Collectable
{
    /**
     * @return mixed
     */
    public function collections()
    {
        return $this->morphMany(app(CollectionContract::class), 'collectable');
    }

    /**
     * @return int
     */
    public function getCollectionsCountAttribute()
    {
        return $this->collections ? $this->collections->count : 0;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $direction
     * @return mixed
     */
    public function scopeOrderByCollectionsCount(Builder $query, $direction='asc')
    {
        $collectable = $query->getModel();

        return $query
            ->select('count(*) as collectors_count')
            ->leftJoin('collections', function (JoinClause $join) use ($collectable) {
                $join
                    ->on('collections.collectable_id', '=', "{$collectable->getTable()}.{$collectable->getKeyName()}")
                    ->where('collections.collectable_type', '=', $collectable->getMorphClass());
            })
            ->orderBy('collectors_count', $direction);
    }
}
