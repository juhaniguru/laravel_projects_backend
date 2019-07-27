<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function manager()
    {
    	return $this->belongsTo(User::class);
    }
}
