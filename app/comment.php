<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function Muser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function Msubject()
    {
        return $this->belongsTo('App\Subject', 'blog_id', 'id');
    }
}
