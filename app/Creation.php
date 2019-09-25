<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{

    protected $fillable = ['artist_id','creation_file_name'];
    protected $table = 'creations';
    
}
