<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Energia extends Model
{
	//protected $fillable = [‘created_at’];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
