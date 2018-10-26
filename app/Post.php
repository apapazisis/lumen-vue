<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Post';

    protected $dateFormat = 'U';

    const CREATED_AT = 'createdAt';
}