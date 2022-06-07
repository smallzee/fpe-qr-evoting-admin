<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $guarded = [];
    protected $table = "students";


    function department(){
        return $this->hasOne(Department::class,'id','department_id');
    }
}
