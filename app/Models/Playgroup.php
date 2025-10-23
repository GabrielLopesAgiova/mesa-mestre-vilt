<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playgroup extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'playgroup_user', 'playgroup_id', 'user_id');
    }
}
