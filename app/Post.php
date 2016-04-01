<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Subbreddit extends Model
{
     /**
     * Get the user that owns the subbreddit.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
     /**
     * Get the posts of the subbreddit.
     */
    public function subbreddit()
    {
        return $this->hasMany('App\Subbreddit');
    }
    /**
     * Get the subscribed users of the subbreddit.
     */
    public function subscribedUsers()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
