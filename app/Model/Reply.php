<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Reply extends Model
{

    protected $guarded = [];

    // relationship between QUESTIONS and REPLY
    public function question() {
      return $this->belongsTo(Question::class);
    }

    // relationship between USER and REPLY, import User model as well on top!
    public function user() {
      return $this->belongsTo(User::class);
    }

    // relationship between LIKES and REPLY, each Reply can have MANY Likes!
    public function like() {
      return $this->hasMany(Like::class);
    }
}
