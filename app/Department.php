<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $guarded = [];
    protected $table = "departments";

    function faculty(){
        return $this->hasOne(Faculty::class,'id','faculty_id');
    }
}
