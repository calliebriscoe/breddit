<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
  * Get the user that owns the post.
  */
  public function user()
   {
       return $this->belongsTo('App\User');
   }

   /**
   * Get the subreddit that owns the comment.
   */
   public function subreddit()
    {
        return $this->belongsTo('App\Subreddit');
    }


    /**
    * Get the comments the user has created.
    */
    public function comments()
     {
         return $this->hasMany('App\Commit');
      }
}
