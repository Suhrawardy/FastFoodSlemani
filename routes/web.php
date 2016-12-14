<?php
use App\Photos;
use App\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $posts=Post::orderBy('id','desc')->paginate(10);
    return view('welcome',compact('posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('uu',function(){
    return view('admin.index');
});
Route::group(['middleware'=>'admin'],function(){
    Route::resource('admin/users','Admin_Dash_Controller');
    Route::resource('admin/posts','AdminPostController');
});
Route::get('/home', 'HomeController@index');
Route::get('post/{id}', function ($id) {
    $post = Post::find($id);
    $photos=Photos::where('post_id', $post->id)->get();

    // if there is no post, 404
    if (!$post) return abort(404);
    // return the view and the post
    return view('post', compact('post','photos','share'));
});