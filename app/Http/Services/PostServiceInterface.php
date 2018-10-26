<?php

namespace App\Http\Services;

use Illuminate\Database\Eloquent\Collection;

interface PostServiceInterface
{
    public function getPosts(): Collection;
}