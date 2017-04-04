<?php

namespace Repertoire\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SortedScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $sort = $this->parseSortColumn($model);
        if(count($sort) === 1)
        {
            $builder->orderBy($sort[0], $model->getSortDirection());
        }
        else
        {
            $relation = $model->getRelation($sort[0]);

            $columns = explode(',', $sort[0]);
        }
    }

    /**
     * @param Model $model
     */
    protected function parseSortColumn(Model $model)
    {
        return explode('.', $model->getSortColumn());
    }
}