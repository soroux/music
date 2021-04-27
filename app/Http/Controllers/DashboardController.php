<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Email;
use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public  function index(){
        return view('dashboard.home',[
            'all_musics'=>Music::all()->count(),
            'unread_mails'=>Email::where('type','receive')->where('status','unread')->count(),
            'pending_comments'=>Comment::where('status','')->count(),
        ]);
    }


}
