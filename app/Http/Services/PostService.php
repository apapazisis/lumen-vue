<?php

namespace App\Http\Services;

use App\Http\Repositories\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class PostService implements PostServiceInterface
{
    private $postRepository;

    public function __construct(
        PostRepositoryInterface $postRepository
    )
    {
        $this->postRepository = $postRepository;
    }

    public function getPosts(): Collection
    {
        return $this->postRepository->getPosts();
    }
}