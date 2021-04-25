<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function create(Request $request,Post $post){
        $input = $request->validate([
            'author'=>'required',
            'title'=>'required',

            'content'=>'required',
        ]);
        $input['email'] = $request->email;

        $comment = $post->Comments()->create($input);
        return redirect()->route('index.blog.post',$post);

    }

    public function index(){
        $comments = Comment::paginate(10);
        return view('dashboard.comment',['comments'=>$comments]);
    }

    public function update(Request $request){
        $comment = Comment::findOrFail($request->id);
        $comment->status = $request->status;
        $comment->save();
        $request->session()->flash('comment-message',' Comment was Updated');
        return redirect()->route('dashboard.comment');
    }

    public function destroy(Comment $comment,Request $request){
        $comment->delete();
        $request->session()->flash('comment-message',' Comment was Deleted');

        return redirect()->route('dashboard.comment');
    }

}
