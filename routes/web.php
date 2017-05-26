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

//referencing controller, specifically getIndex function
// Route::get('/', 'PostController@getIndex')->name('blog.index');

// referencing controller via array.  Can define multiple things in this array.  And assign names to array with 'as'
Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
  ]);

  Route::get('post/{id}', [
      'uses' => 'PostController@getPost',
      'as' => 'blog.post'
  ]);

  Route::get('about', function () {
      return view('other.about');
  })->name('other.about');

  Route::group(['prefix' => 'admin'], function() {
      Route::get('', [
          'uses' => 'PostController@getAdminIndex',
          'as' => 'admin.index'
      ]);

      Route::get('create', [
          'uses' => 'PostController@getAdminCreate',
          'as' => 'admin.create'
      ]);

      Route::post('create', [
          'uses' => 'PostController@postAdminCreate',
          'as' => 'admin.create'
      ]);

      Route::get('edit/{id}', [
          'uses' => 'PostController@getAdminEdit',
          'as' => 'admin.edit'
      ]);

      Route::post('edit', [
          'uses' => 'PostController@postAdminUpdate',
          'as' => 'admin.update'
      ]);

/************ Dummy Data ****************/


// // (First is path, and second is what's executed)
// Route::get('post/{id}', function($id){
//   if ($id ==1) {
//     $post = [
//       'title' => 'Learning Laravel',
//       'content' => 'This blog post will get you right on track with Laravel'
//     ];
//   } else {
//     $post = [
//       'title' => 'Something Else',
//       'content' => 'Some other content'
//     ];
//   }
//   //asigning post variable
//   return view('blog.post', ['post' => $post]);
// })->name('blog.post');
//
// Route::get('about', function () {
//     return view('other.about');
// })->name('other.about');
//
//
// // Grouping together Admin routs
// Route::group(['prefix' => 'admin'], function(){
//
//   Route::get('', function () {
//       return view('admin.index');
//   })->name('admin.index');
//
//   Route::get('create', function () {
//       return view('admin.create');
//   })->name('admin.create');
//
//
// //injecting $validator into post requests
//   Route::post('create', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator){
//     // calling our validator, applying make method, argument is $request using all() method
//     $validation = $validator->make($request->all(), [
//       // validation rules: https://laravel.com/docs/5.4/validation#available-validation-rules
//       'title' => 'required|min:5',
//       'content'=>'required|min:10'
//     ]);
//     // if variable validation fails
//     if($validation->fails()){
//       //ship errors back to the view
//       return redirect()->back()->withErrors($validation);
//     }
//
//
//     //redirecting back to admin index page.
//     return redirect()
//     ->route('admin.index')
//     // With method will display with just available request first time.
//     //concatinated request input from admin.edit.  Edit has input with name of 'title'
//     ->with('info', 'Post created, Title: ' . $request->input('title'));
//   })->name('admin.create');
//
//   Route::get('edit/{id}', function ($id) {
//     if ($id ==1) {
//       $post = [
//         'title' => 'Learning Laravel',
//         'content' => 'This blog post will get you right on track with Laravel'
//       ];
//     } else {
//       $post = [
//         'title' => 'Something Else',
//         'content' => 'Some other content'
//       ];
//     }
//       return view('admin.edit', ['post' => $post]);
//   })->name('admin.edit');
//
//   Route::post('edit', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator){
//     // calling our validator, applying make method, argument is $request using all() method
//     $validation = $validator->make($request->all(), [
//       // validation rules: https://laravel.com/docs/5.4/validation#available-validation-rules
//       'title' => 'required|min:5',
//       'content'=>'required|min:10'
//     ]);
//     // if variable validation fails
//     if($validation->fails()){
//       //ship errors back to the view
//       return redirect()->back()->withErrors($validation);
//     }
//
//
//     //redirecting back to admin index page.
//     return redirect()
//     ->route('admin.index')
//     // With method will display with just available request first time.
//     //concatinated request input from admin.edit.  Edit has input with name of 'title'
//     ->with('info', 'Post edited, new Title: ' . $request->input('title'));
//   })->name('admin.update');

//**********************************************//

});
