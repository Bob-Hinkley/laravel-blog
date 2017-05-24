<?php

//used as reference by rest of web app
namespace App;

class Post
{
  public function getPosts($session)
  {
    // if seesion doesn't have any post keys
    if(!$session->has('posts')){
      //then populate session with dummy data
      $this->createDummyData ($session);
    }
    return $session->get('posts');
  }

// passing session into function
  private function createDummyData($session)
  {
    $posts = [
      [
        'title' => 'Learning Laravel',
        'content' => 'This blog post will get you on track with Laravel'
      ],
      [
        'title' => 'Something else',
        'content' => 'Some other content'
      ]
    ];
    // putting posts in session, using key of 'posts'
    $session->put('posts', $posts);
  }
}

 ?>
