<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $guarded = [];
    protected $table = "posts";

    function total_vote(){
        return $this->hasMany(Vote::class,'id','post_id')->count();
    }
}
