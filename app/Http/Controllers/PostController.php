<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Services\PostService;
use App\Http\Requests\PostCreateRequest;
use App\Post;
class PostController extends Controller
{
    public function __construct(PostRepository $repository,PostService $service)
    {

        $this->respository = $repository;
        $this->service= $service;
    }
    public function index(Request $request)
    {
        $posts = $this->respository->all();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostCreateRequest $request)
    {
        $user =1;
        $post = $this->service->make($request->validated(),$user);
        return redirect('/posts');
    }

    public function show($id)
    {
        $post = $this->respository->show($id);
        return view('post.show',compact('post'));
    }

    public function edit($id)
    {
        $post = $this->respository->find($id);
        return view('post.edit',compact('post'));
    }

    public function update(PostCreateRequest $request,$id)
    {
        $post = $this->respository->find($id);

        $this->service->update($request->validated(),$post);
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = $this->service->delete($id);
        return redirect()->back();
    }
}
