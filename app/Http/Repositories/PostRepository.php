<?php

namespace App\Http\Repositories;

use App\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository implements PostRepositoryInterface
{
    private $postModel;

    public function __construct(
        Post $post
    )
    {
        $this->postModel = $post;
    }

    public function getPosts(): Collection
    {
        return $this->postModel->orderBy('createdAt', 'desc')->get();
    }
}