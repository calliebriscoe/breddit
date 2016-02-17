<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
      /**
      * Get the comments for the user.
      */
     public function comments()
     {
         return $this->hasMany('App\Comment');
     }

     /**
     * Get the posts for the user.
     */
      public function posts()
      {
          return $this->hasMany('App\Post');
      }

      /**
      * Get the subreddits the user has created.
      */
      public function subreddits()
       {
           return $this->hasMany('App\Subreddit');
       }

       /**
       * Get the subscribed subreddits of the user.
       */
       public function subscribedSubreddits()
        {
            return $this->belongsToMany('App\Subreddit');
        }

}
