<?php

namespace Repertoire\Models\Traits;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait CreatedBy
{
	public function createdBy()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

    public static function bootCreatedBy()
    {
        static::creating(function (Model $model) {
            $model->created_by = Auth::id();
        });
    }
}