<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{

    public function blogs()
    {
        return $this->belongsToMany('App\Blog');
    }
}
