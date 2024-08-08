<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAllSorted($order)
    {
        return Post::orderBy($order)->get();
    }
}
