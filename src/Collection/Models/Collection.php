<?php

namespace Vetor\Laravel\Collect\Collection\Models;

use Illuminate\Database\Eloquent\Model;
use Vetor\Contracts\Collect\Collection\Models\Collection as CollectionContract;

class Collection extends Model implements CollectionContract
{
    /**
     * @var string
     */
    protected $table = 'collections';

    /**
     * @var array
     */
    protected $fillable = [
        'collectable_id',
        'collectable_type',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function collectable()
    {
        return $this->morphTo();
    }
}
