<?php

namespace App\GraphQL\Queries;

use App\Models\Post;

class FindPost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return  Post::find( $args['id']);
    }
}
