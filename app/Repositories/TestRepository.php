<?php
namespace App\Repositories;
use App\Post;
class TestRepository{

    public function find($id){

    }

    public function all(){
        return Post::orderBy('created_at','desc')->paginate(5);
    }

}

