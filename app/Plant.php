<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [ 
        'name', 'comments', 'imageFileName', 'planttypeID', 'roomID', 'systemID' 
    ];
}