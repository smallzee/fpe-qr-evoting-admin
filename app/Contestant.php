<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    //
    protected $table = "contestant";
    protected $guarded = [];

    function department(){
        return $this->hasOne(Department::class,'id','department_id');
    }

    function post(){
        return $this->hasOne(Posts::class,'id','post_id');
    }

}
