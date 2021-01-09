<?php

namespace Crud\Http\Controllers;

use Crud\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
       
		
    }
 
    public function index()
    {
       $posts = Post::latest()->simplePaginate(10);
		 //$posts = DB::table('posts')->paginate(1);
		//print_r($posts); 
        if (count($posts)<=0) {
            return view('noPosts');
        }else
        return view('home',compact('posts'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'title'    => 'required',
            'body'     => 'required',
        ]);
        $post = new Post;      
        $post -> title = request('title');
        $post -> body = request('body');
        $post -> save();
        session()->flash('status','Post successfully created ');
        return redirect('home');
    }


    public function show(Post $post)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit',compact('post'));
    }


    public function update($id,Request $request)
    {
        $this->validate(request(), [
            'title'    => 'required',
            'body'     => 'required',
        ]);
        $post =  Post::findOrFail($id);
  
        $post -> title = request('title');
        $post -> body = request('body');
        $post -> update();
        session()->flash('status','Post updated');
        return redirect('home');
	
    }


    public function destroy($id,Post $post)
    {
        $post = Post::findOrFail($id);
        $post -> delete();
        session()->flash('status','Post deleted');
        return redirect('home');
    }

    public function noPosts()
    {     
        return view('noPosts');
    }
}
