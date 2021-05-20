<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

class CreatePost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::create($args);

        return $post;
    }
}
