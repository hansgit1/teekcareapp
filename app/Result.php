<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $results = 'results ';

    public function userresultaat(){
        return $this->hasMany('App\User','id','user_id');
    }
    
    public function symptoom() {
        return $this->belongsTo('App\Result','resultaat_nummer','id');
      }
}
