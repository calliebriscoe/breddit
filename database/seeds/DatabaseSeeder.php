<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 100)->create()->each(function($user) {
          $user->subreddits()->save(factory(App\Subreddit::class)->make());
          $user->posts()->save(factory(App\Post::class)->make([
              'subreddit_id' => rand(1,App\Subreddit::all()->count())
          ]));
          $user->comments()->save(factory(App\Comment::class)->make([
              'post_id' => rand(1,App\Post::all()->count())
          ]));
          $user->comments()->save(factory(App\Comment::class)->make([
              'comment_id' => rand(1,App\Comment::all()->count())
          ]));
          $user->subscribedsubreddits()->attach(rand(1,App\Subreddit::all()->count()));
      });
    }
}
