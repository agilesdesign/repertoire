<?php

namespace Repertoire\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Myrtle\Users\Models\User;

trait DeletedBy {

	public function deletedBy()
	{
		return $this->belongsTo(User::class, 'deleted_by');
	}

    public static function bootDeletedBy()
    {
        static::deleting(function (Model $model) {
            $model->deleted_by = Auth::id();
        });

        static::restoring(function (Model $model) {
            $model->deleted_by = null;
        });
    }
}