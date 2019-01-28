<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    //
    public function Mcomments()
    {
        return $this->hasMany('App\Comment', 'blog_id');
    }
    
    public function Muser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
