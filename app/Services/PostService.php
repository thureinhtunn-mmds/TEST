<?php
namespace App\Services;
use App\Post;
class PostService{

    public function make($data,$user)
    {
        $data['user_id'] = $user;
        $post = Post::create($data);
        return $post;
    }

    public function update($data,$post)
    {
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        Post::where('id',$id)->delete();
    }
}
?>
