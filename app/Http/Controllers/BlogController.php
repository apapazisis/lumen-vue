<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function showAllPosts()
    {
        $posts = [
            ['id'  => 1, 'title' => 'My Laravel', 'text' => 'Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.'],
            ['id' => 2, 'title' => 'My Symfony', 'text' => 'The symfony'],
            ['id' => 3, 'title' => 'My Symfony', 'text' => 'The symfony'],
        ];

        return response()->json($posts);
    }
}