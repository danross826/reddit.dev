<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Support\Facades\Log;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    public function index(Request $request)
    {
        if($request->has('search_post')){


            $posts = Post::where('title','LIKE','%' . $request['search_post'] . '%')
            ->orderBy('created_at','desc')
            ->paginate(10);
        }else{
            $posts = Post::paginate(10);
        }


        $data['posts'] = $posts;
        
        return view('posts.index', $data);

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
        'title' => 'required|max:100',
        'url'   => 'required',
        'content'=>'required',
        );

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see error messages below.');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');

        $post = new Post;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->user_id = $request->user()->id;
        $post->save();


        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        Log::info($post);

        return redirect('/posts/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data['post'] = $post;

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $data['post'] = $post;
        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(
        'title' => 'required|max:100',
        'url'   => 'required|url',
        'content'=>'required',
        );

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see error messages below.');
        $this->validate($request, $rules);
        $request->session()->forget('ERROR_MESSAGE');


        $post = Post::findOrFail($id);

      

        $post->title = $request->title; 
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect('/posts');
    }
}
