<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// bring in Post model/table in DB
use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all posts in Post table and order by descending create date
        //$blogs = Post::orderBy('created_at','desc')->get();

        // Get all posts in Post Table
        //$blogs = Post::all();

        // Get all posts in Post table and order by descending create date and paginate with 6 results per page
        $blogs = Post::orderBy('created_at','desc')->paginate(6);

        return view('blog.home')->with('blogs',$blogs);
    }

    public function admin_index()
    {
        $blogs = Post::orderBy('created_at','desc')->paginate(10);
        $user = Auth::user();
        return view('blog.viewall')->with(['blogs'=>$blogs,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //$user = Auth::user();
        $user = Auth::user();
        return view('blog.create')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body'  => 'required',
        ]);

       // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        if($post->slug == ''){
            $post->slug = str_slug($post->title);
        }

        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/dashboard/blogs')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show individual blog posts
        $blog = Post::find($id);

        // Get user id by post
        $user_id = $blog->user_id;
        //Get user id by post from different table
        $user = User::find($user_id);
        
        return view('blog.post')->with(['blog'=>$blog,'user'=>$user]);
        //return redirect('blog/'.$id.'/'.$blog->slug)->with(['blog'=>$blog,'user'=>$user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Post::find($id);
        $user = Auth::user();
        return view('blog.edit')->with(['blog'=>$blog,'user'=>$user]);
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);

        // Update Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        if($post->slug == ''){
            $post->slug = str_slug($post->title);
        }
        $post->body = $request->input('body');
        $user = Auth::user();
        $post->save();

        return redirect('/dashboard/blogs')->with(['success'=>'Post Updated','user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        $post->delete();
        return redirect('/dashboard')->with(['success'=>'Post Deleted','user'=>$user]);
    }

}