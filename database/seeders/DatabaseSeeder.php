<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(2)
            ->create()
            ->each(function ($user) {
                $user->posts()->createMany(
                    Post::factory(4)
                    ->make()->toArray()
                );
            });   

        foreach ($users as $user) {
            foreach ($user->posts as $post) {
                $post->comments()->createMany(
                    Comment::factory(2)
                        ->make()->toArray()
                );
            }
        }            
    }
}
