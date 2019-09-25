<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $fillable = ['art_form_name','category_name'];
  protected $table = 'art';

  public function artist(){
    return $this->hasMany('App\Art');
}


}
