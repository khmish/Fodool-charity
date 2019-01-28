<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    public function Msubject()
    {
        
        return $this->hasMany('App\Subject', 'blog_id', 'id');
        
    } 
}
