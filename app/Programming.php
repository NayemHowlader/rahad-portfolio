<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{
    protected $guarded = [];
    
    public function users_addedby(){
        return $this->belongsTo('App\User','added_by','email');
    }
    public function users_editedby(){
        return $this->belongsTo('App\User','edited_by','email');
    }
    
}
