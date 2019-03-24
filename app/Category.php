<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categorys';

    public function advertisments()
    {
        return $this->hasMany('App\Advertisment');
    }
}
