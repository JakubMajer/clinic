<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\Owners');
    }
}
