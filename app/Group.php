<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function student()
    {
        return $this->hasMany('App\Student','group_id','id');
    }

    public function faculty()
    {
        return $this->hasOne('App\Faculty','id','faculty_id');
    }
}
