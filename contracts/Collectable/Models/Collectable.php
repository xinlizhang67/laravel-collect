<?php

namespace Vetor\Contracts\Collect\Collectable\Models;

use Illuminate\Database\Eloquent\Builder;

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

    /**
     * @return mixed
     */
    public function getCollectionsCountAttribute();

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $direction
     * @return mixed
     */
    public function scopeOrderByCollectionsCount(Builder $query, $direction='asc');
}
