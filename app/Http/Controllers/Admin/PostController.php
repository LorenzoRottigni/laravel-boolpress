<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Post;
use App\Topic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsList = Post::all();

        foreach ($postsList as $post) {
            $topic = Topic::find($post->topic_id);
            $user = User::find($post->user_id);
            $post["user_name"] = $user->name;
            $post["topic"] = $topic->name;
        }
        return view("admin.posts.index", compact('postsList'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::all();

        return view("admin.posts.create", compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newPost = new Post();

        $newPost->fill($data);
        $newPost->user_id = Auth::id();

        var_dump($data["topic_id"]);
        //$newPost = new Post();
        //$newPost->title = $data["title"];
        //$newPost->content = $data["content"];
        //$newPost->creator_id = Auth::id();
        //$newPost->topics = $data["topics"];
        $newPost->save();


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $topic = Topic::find($post->topic_id);
        $user = User::find($post->user_id);
        $post["user_name"] = $user->name;
        $post["topic"] = $topic->name;
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $topics = Topic::all();
        return view('admin.posts.edit',
        [
            "post" => $post,
            "topics" => $topics
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        $post->update($data);

        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.home');
    }
}
