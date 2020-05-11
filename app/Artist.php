<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = 
    ['name',
    'fathersname',
    'dob',
    'gender',
    'language',
    'email',
    'pno',
    'state',
    'city',
    'address',
    'photourl',
    'artist_level',
    'creation_mode',
    'creation_mode_sub',
    'creation_video_url',
    'pan',
    'experience'
    'adhaar',
    'bank_name',
    'ifsc_code',
    'branch_name',
    'scheme',
    'presenter'];
    protected $table = 'artist';

    public function creations(){
    	return $this->hasMany('App\Creation');
    }

    // public static function boot(){
    //     parent::boot();
    //     static::deleted(function)
    // }
}
