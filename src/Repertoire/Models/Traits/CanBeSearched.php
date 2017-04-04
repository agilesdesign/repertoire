<?php

namespace Repertoire\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait CanBeSearched
{
    public function scopeSearched(Builder $query)
    {
        if($search = request('search'))
        {
            $ids = static::search($search)->get()->pluck('id');

            return $query->whereIn('id', $ids);
        }
    }
}