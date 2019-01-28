<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }
}
