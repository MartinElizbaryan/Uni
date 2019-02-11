<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function group()
    {
        return $this->hasMany('App\Group','faculty_id','id');
    }
}
