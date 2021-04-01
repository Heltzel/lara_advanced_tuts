<?php

namespace App;

use Illuminate\Pipeline\Pipeline;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public static function allPosts()
    {
        //$posts is the pipeline
        return $posts = app(Pipeline::class)
            ->send(Post::query())
            ->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\Sort::class,
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->paginate(5);

    }
}
