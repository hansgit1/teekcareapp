<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vragenModel extends Model
{
    protected $fillable = [
        'vraag', 'symptoom',
    ];

    protected $table = 'questions';
}
