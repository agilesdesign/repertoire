<?php

namespace Repertoire\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Myrtle\Users\Models\User;

trait UpdatedBy {

	public function updatedBy()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

    public static function bootUpdatedBy()
    {
        static::updating(function (Model $model) {
            $model->updated_by = Auth::id();
        });
    }
}