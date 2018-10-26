<?php

namespace App\Http\Controllers;

use App\Http\Services\PostServiceInterface;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    private $postService;

    public function __construct(
        PostServiceInterface $postService
    )
    {
        $this->postService = $postService;
    }

    public function showAllPosts(): JsonResponse
    {
        return response()->json($this->postService->getPosts());
    }
}