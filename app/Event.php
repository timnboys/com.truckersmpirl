<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
