<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Gallery;
use App\Models\Music;
use App\Models\Playlist;
use App\Models\Post;
use App\Models\Radio;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //

    public function index(){
        return view('index.welcome',[
            'sliders'=>Slider::all(),
            'RIJ_playlist'=>Playlist::where('name','Run into Jazzy Things')->firstOrFail(),
            'Jessentials_playlist'=>Playlist::where('name','Jazz Essentials')->firstOrFail(),
'musics'=>Music::all()->sortByDesc('created_at'),
            'Jblog'=>Post::where('title','What is Jazz')->firstOrFail(),
            'Amusics'=>Music::where('featured','1')->get()->sortByDesc('created_at'),

            'lmusics'=>Music::whereBetween('created_at',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])->take(10)->get(),
        ]);
    }

    public function blog(){
        return view('index.blog',[
            'posts'=>Post::all(),
            'photo'=>Gallery::where('name','Blog')->firstOrFail(),

        ]);
    }
    public function blogCategory($category){
        return view('index.blog-category',[
            'posts'=>Post::where('category',$category)->get(),
            'photo'=>Gallery::where('name','Blog')->firstOrFail(),


        ]);
    }
    public function showPost(Post $post){

        $relatedPosts = Post::where('category',$post->category)->get();
        return view('index.blog-post',[
            'post'=>$post,
            'relatedPosts'=>$relatedPosts,
            'photo'=>Gallery::where('name','Blog')->firstOrFail(),


        ]);
    }

    public function radio(){
        return view('index.radio',[
            'radios'=>Radio::all(),
            'photo'=>Gallery::where('name','Radio')->firstOrFail(),

        ]);
    }
    public function contact(){
        return view('index.contact',[
            'photo'=>Gallery::where('name','Contact')->firstOrFail(),

        ]);
    }

    public function playlist(){
        return view('index.playlist',[
            'playlists'=>Playlist::all(),
            'photo'=>Gallery::where('name','Playlist')->firstOrFail(),

        ]);
    }
    public function playlistCategory($category){
        return view('index.playlist-category',[
            'playlists'=>Playlist::where('category',$category)->get(),
            'photo'=>Gallery::where('name','Playlist')->firstOrFail(),


        ]);
    }
    public function playlistShow(Playlist $playlist){
        return view('index.playlist-show',[
            'playlist'=>$playlist,
            'photo'=>Gallery::where('name','Playlist')->firstOrFail(),

        ]);
    }
    public function sliderShow(Slider $slider){
        return view('index.slider-show',[
            'slider'=>$slider,


        ]);
    }

    public function musicShow($category){
        $musics = Music::where('genre',$category)->get()->sortByDesc('created_at');
        return view('index.music-category',[
            'musics'=>$musics,
            'photo'=>Gallery::where('name','Playlist')->firstOrFail(),

        ]);
    }

    public function mail(Request $request){

        $input['name'] = $request->name;
        $input['subject'] = $request->subject;
        $input['phone'] = $request->phone;
        $input['content'] = $request->message;
        $input['email'] = $request->email;
        $input['service'] = $request->service;
        $input['type']='receive';
        $mail = new Email();
        $mail->create($input);

        Mail::send('index.contact-mail',$input,function ($message){
            $message->to('soroush.ganjuee@gmail.com')->subject('canvas Contact');
        });
        $request->session()->flash('message','پیام شما با موفقیت ارسال شد');
        return back();

    }
}
