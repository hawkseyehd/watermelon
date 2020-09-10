<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function catagories()
    {
        return $this->belongsToMany('App\Catagory');
    }
}
