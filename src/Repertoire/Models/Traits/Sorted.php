<?php

namespace Repertoire\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Myrtle\Users\Models\User;
use Repertoire\Models\Scopes\SortedScope;

trait Sorted
{
	public static function bootSorted()
    {
        static::addGlobalScope(new SortedScope);
    }

    public function getSortColumn()
    {
        return Request::get('sort') ?? $this->getKeyName();
    }

    public function getSortDirection()
    {
        return Request::get('order') ?? 'asc';
    }
}