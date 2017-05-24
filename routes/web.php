<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

// (First is path, and second is what's executed)
Route::get('post/{id}', function($id){
  if ($id ==1) {
    $post = [
      'title' => 'Learning Laravel',
      'content' => 'This blog post will get you right on track with Laravel'
    ];
  } else {
    $post = [
      'title' => 'Something Else',
      'content' => 'Some other content'
    ];
  }
  //asigning post variable
  return view('blog.post', ['post' => $post]);
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');


// Grouping together Admin routs
Route::group(['prefix' => 'admin'], function(){

  Route::get('', function () {
      return view('admin.index');
  })->name('admin.index');

  Route::get('create', function () {
      return view('admin.create');
  })->name('admin.create');

  Route::post('create', function(\Illuminate\Http\Request $request){
    //redirecting back to admin index page.
    return redirect()
    ->route('admin.index')
    // With method will display with just available request first time.
    //concatinated request input from admin.edit.  Edit has input with name of 'title'
    ->with('info', 'Post created, Title: ' . $request->input('title'));
  })->name('admin.create');

  Route::get('edit/{id}', function ($id) {
    if ($id ==1) {
      $post = [
        'title' => 'Learning Laravel',
        'content' => 'This blog post will get you right on track with Laravel'
      ];
    } else {
      $post = [
        'title' => 'Something Else',
        'content' => 'Some other content'
      ];
    }
      return view('admin.edit', ['post' => $post]);
  })->name('admin.edit');

  Route::post('edit', function(\Illuminate\Http\Request $request){
    //redirecting back to admin index page.
    return redirect()
    ->route('admin.index')
    // With method will display with just available request first time.
    //concatinated request input from admin.edit.  Edit has input with name of 'title'
    ->with('info', 'Post edited, new Title: ' . $request->input('title'));
  })->name('admin.update');

});
