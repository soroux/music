<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public  function index(){

        return view('dashboard.post',['posts'=>Post::all()]);
    }

    public  function edit(Post $post){

        return view('dashboard.post-edit',['post'=>$post]);
    }
    public  function create(){

        return view('dashboard.post-create');
    }
    public function store(Request $request){

        $inputs = $request->validate([
            'title'=>'required',
            'category'=>'required',
            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }
        $post = auth()->user()->posts()->create($inputs);


        $request->session()->flash('post-message',' post was Created');
        return redirect()->route('dashboard.post');

    }

    public function update(Request $request,Post $post){

        $inputs = $request->validate([
            'title'=>'required',
            'category'=>'required',
            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }

        $post->update($inputs);

        $request->session()->flash('post-message',' post was updated');
        return redirect()->route('dashboard.post');

    }

    public  function destroy(Request $request,Post $post){
        $post->delete();

        $request->session()->flash('post-message',' post was Deleted');
        return view('dashboard.post');
    }

}
