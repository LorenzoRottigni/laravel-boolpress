<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;
use App\Topic;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/posts', function(){
//    $postsList = Post::with('user','topic','tag')->get();
//
//    //foreach ($postsList as $post) {
//    //    $topic = Topic::find($post->topic_id);
//    //    $user = User::find($post->user_id);
//    //    $post["user_name"] = $user->name;
//    //    $post["topic"] = $topic->name;
//    //}
//    return $postsList;
//});

Route::get("/posts", "Api\PostController@index");
