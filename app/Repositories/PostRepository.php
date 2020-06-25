<?php
namespace App\Repositories;
use App\Post;

class PostRepository
{
    public function all()
    {
        return Post::orderBy('created_at','desc')->paginate(4);
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function find($id)
    {
        return Post::findOrFail($id);
    }
}
?>
