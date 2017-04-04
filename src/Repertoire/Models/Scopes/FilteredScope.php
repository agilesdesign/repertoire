<?php

namespace Repertoire\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilteredScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $model->getFilters();
    }
}