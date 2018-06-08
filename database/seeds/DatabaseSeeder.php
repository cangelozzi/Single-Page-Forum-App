<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
     // call Factories
    factory(User::class, 10)->create(); //create 10 user...import Model above
    factory(Category::class, 5)->create();//create 5 category...import Model 
    factory(Question::class, 10)->create();//create 10 question...import Model 
    
    factory(Reply::class, 50)->create()->each(function ($reply) {
        return $reply->like()->save(factory(Like::class)->make());
      }
    );//create 50 reply, and for each reply add also some Like...import Model 
  }
}
