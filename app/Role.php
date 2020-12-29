<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relacion Many To Many
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
