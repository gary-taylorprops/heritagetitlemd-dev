<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the currently authenticated user...
        //$user = Auth::user();
        $user_id = auth()->user()->id;

        // Get user info from DB by user_id
        $user = User::find($user_id);

        // Get posts by user_id -- needs relationship
        $posts = User::find($user_id)->posts;
        
        // Get the currently authenticated user's ID...
        //$name = Auth::name();
        //$name = $user->name;

        //return view('dashboard.home')->with(['user'=>$user,'user_id'=>$user_id]);
        return view('dashboard.home')->with(['user'=>$user,'posts'=>$posts]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        //$user = Auth::user();

        return view('dashboard.profile')->with('user',$user);
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
            'name' => 'required',
            'email' => 'required',
        ]);

        // Update Post
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/dashboard')->with(['success'=>'Profile Updated','user'=>$user]);
    }

    public function activity_log($id)
    {
        // Get user info from DB by user_id
        $user = User::find($id);

        // Get posts by user_id -- needs relationship
        $posts = User::find($user)->posts;

        return $posts;

        //return $posts;
        return view('dashboard.activity')->with(['user'=>$user,'posts'=>$posts]);
    }

    public function search(Request $request)
    {
        $user = auth()->user();
        $query = $request->input('q');
        $posts = Post::where('title','LIKE','%'.$query.'%')->orWhere('body','LIKE','%'.$query.'%')->paginate(10);
        if(count($posts) > 0)
        {
            return view('dashboard.search')->with(['posts'=>$posts,'query'=>$query,'user'=>$user]);
        }
        else
        {
            return view ('dashboard.home')->withMessage('No Details found. Try to search again !');
        }
    }


}
