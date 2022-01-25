<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $postsList = Post::with('user','topic','tag')->paginate(3);

        /* foreach ($postsList as $post) {
          $body = strip_tags($post->body);
          $post["body"] = strlen($body) > 200 ? substr($body, 0, 200) . "..." : $body;
        } */

        //return $postsList;
        return response()->json($postsList);
      }
}
