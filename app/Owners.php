<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    public function pet()
    {
        return $this->hasMany('App\Pets');
    }
}
