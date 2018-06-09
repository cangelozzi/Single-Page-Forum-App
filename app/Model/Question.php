<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{

    //create a function that make use of the SLUG as key router, in place of the question_ID
    public function getRouteKeyName()
    {
      return 'slug';
    }    

    // MASS ASSIGNMENT FIX for POST REQUESTS
    // protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];

    // also allowing all the fields
    protected $guarded = [];

    // create Relationship between USER and the QUESTION, and import User model
    public function user() {
      return $this->belongsTo(User::class);
    }
    
    // create Relationship between REPLIES (Question can have many replies!) and the QUESTION
    public function replies() {
      return $this->hasMany(Reply::class);
    }

    // create Relationship between CATEGORIES (Question are linked to specific categories!) and the QUESTION
    public function category() {
      return $this->belongsTo(Category::class);
    }

    // function to get url path
    public function getPathAttribute()
    {
      return asset("api/question/$this->slug");
    }
}
