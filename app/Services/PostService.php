<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postsRepository;

    public function __construct(PostRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function getAllSorted($order)
    {
        return $this->postsRepository->getAllSorted($order);
    }
}
