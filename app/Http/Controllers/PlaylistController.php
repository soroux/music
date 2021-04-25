<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    //


    public  function index(){

        return view('dashboard.playlist',['playlists'=>Playlist::all()]);
    }

    public  function edit(Playlist $playlist){

        return view('dashboard.playlist-edit',['playlist'=>$playlist,'musics'=>Music::all()]);
    }
    public  function create(){

        return view('dashboard.playlist-create',['musics'=>Music::all()]);
    }
    public function store(Request $request){

        $inputs = $request->validate([
            'name'=>'required',
            'category'=>'required',

            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }
        $playlist = auth()->user()->playlists()->create($inputs);
        $musics = $request->musics;
        foreach ($musics as $music) {
            $music = Music::find($music);
            $playlist->musics()->save($music);

        }

        $request->session()->flash('playlist-message',' Playlist was Created');
        return redirect()->route('dashboard.playlist');

    }

    public function update(Request $request,Playlist $playlist){

        $inputs = $request->validate([
            'name'=>'required',
            'category'=>'required',

            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }

        if ($request->musics){
            $musics = $request->musics;

            $playlist->musics()->detach();

        foreach ($musics as $music) {
            $music = Music::find($music);

            $playlist->musics()->save($music);
        }
            }
        $playlist->update($inputs);

        $request->session()->flash('playlist-message',' Playlist was updated');
        return redirect()->route('dashboard.playlist');

    }

    public  function destroy(Request $request,Playlist $playlist){
        $playlist->musics()->detach();

        $playlist->delete();

        $request->session()->flash('playlist-message',' Playlist was Deleted');
        return view('dashboard.playlist');
    }

}
