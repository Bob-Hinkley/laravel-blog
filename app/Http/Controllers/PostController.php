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
}
