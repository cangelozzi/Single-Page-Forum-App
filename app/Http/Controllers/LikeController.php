<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{

    //! JWT Middleware to stop creating Question without a token except index and store
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('JWT');
  }

  //! END JWT Middleware to stop creating Question without a token

  public function likeIt(Reply $reply)
  {
    $reply->like()->create([
      // 'user_id' => auth()->id();
      'user_id' => '1' // for testing purposes
    ]);
  }

  public function unlikeIt(Reply $reply)
  {
    // $reply->like()->where('user_id', auth()->id())->first()->delete();
    $reply->like()->where('user_id', '1')->first()->delete();
  }

}
