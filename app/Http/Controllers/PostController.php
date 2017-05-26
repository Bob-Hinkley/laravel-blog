<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getIndex(Store $session)
    {
      //new post object refers to post model (providers.post)
      $post = new Post();
      $posts = $post->getPosts($session);
      return view('blog.index', ['posts' => $posts]);
    }
    //presents post in admin index page
    public function getAdminIndex(Store $session)
    {
        $post = new Post();
        $posts = $post->getPosts($session);
        return view('admin.index', ['posts' => $posts]);
    }
    //festched from post model and display on view
    public function getPost(Store $session, $id)
    {
        $post = new Post();
        $post = $post->getPost($session, $id);
        return view('blog.post', ['post' => $post]);
    }
    //return view that allows admin to create new post
    public function getAdminCreate()
    {
        return view('admin.create');
    }
    //
    public function getAdminEdit(Store $session, $id)
    {
        $post = new Post();
        $post = $post->getPost($session, $id);
        return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }
    //triggered when admin or user submits create user form (submit button)
    public function postAdminCreate(Store $session, Request $request)
    {
      //validation rules
      $this->validate($request, [
        // validation rules: https://laravel.com/docs/5.4/validation#available-validation-rules
        'title' => 'required|min:5',
        'content'=>'required|min:10'
      ]);
        $post = new Post();
        //calling addPost
        $post->addPost($session, $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }
    //Same, but for editing post
    public function postAdminUpdate(Store $session, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = new Post();
        //calling edit post
        $post->editPost($session, $request->input('id'), $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }
}
