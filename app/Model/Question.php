<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
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
}
