<?php

namespace Repertoire\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait Filtered
{
    public function scopeFiltered(Builder $query)
    {
        return $this->applyFilters($query);
    }

    protected function getFilters()
    {
        return request()->only($this->filters);
    }

    public function applyFilters(Builder $builder)
    {
        collect($this->getFilters())->reject(function($value, $filter) {
            return empty($value);
        })->each(function($value, $filter) use (&$builder){
            $method = 'by' . studly_case($filter);
            $builder = $this->$method($value, $builder);
        });

        return $builder;
    }
}