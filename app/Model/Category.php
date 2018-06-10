<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  protected $guarded = [];
  
  //create a function that make use of the SLUG as key router, in place of the question_ID
  public function getRouteKeyName()
  {
    return 'slug';
  }

}
