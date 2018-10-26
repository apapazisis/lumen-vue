<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface PostRepositoryInterface
{
    public function getPosts(): Collection;
}