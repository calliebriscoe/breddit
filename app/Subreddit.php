<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{

  /**
  * Get the user that owns the subreddit.
  */
  public function user()
   {
       return $this->belongsTo('App\User');
   }

   /**
   * Get the posts that owns the comment.
   */
   public function posts()
    {
        return $this->hasMany('App\Post');
    }


     /**
     * Get the subscribed users of the subreddit.
     */
     public function subscribedUsers()
      {
          return $this->belongsToMany('App\User');
      }
}
