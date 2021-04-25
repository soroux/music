<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Owenoj\LaravelGetId3\GetId3;
use Symfony\Component\Console\Input\Input;

class MusicController extends Controller
{
    //


    public function index(){

        return view('dashboard.musics',['musics'=>Music::all()]);
    }
    public function add(){
        return view('dashboard.musics-create');
    }

    public function store(Request $request){
        $musics = $request->file('files');

        foreach ($musics as $music) {
            //instantiate class with file
            $track = new GetId3($music);

            $fileName =$music->getClientOriginalName();
            $input['music'] = $music->storeAs('musics', $fileName);
            $input['genre']= $request->genre;
            $input['size'] = $music->getSize();
            $input['artist']=$track->getArtist();
            if ($track->getArtwork()){
                $input['artWork'] = $track->getArtwork('true')->storeAs('images/track',$track->getArtwork('true')->getClientOriginalName());
            }
            $input['name'] = $track->getTitle();

            Auth::user()->musics()->create($input);
        }
        $request->session()->flash('music-message',' Music was Created');
        return redirect()->route('dashboard.musics');


    }

    public function edit(Music $music){
        return view('dashboard.musics-edit',['music'=>$music]);
    }

    public function update(Request $request ,Music $music){


        $inputs = $request->validate([
           'name'=>'required',
           'genre'=>'required',
        ]);

        if ($request->image){
            $inputs['artWork'] = $request->image->storeAs('images/track',$request->image->getClientOriginalName());
        }
        if ($request->artist){
            $inputs['artist'] = $request->artist;
        }
        if ($request->featured){
            $inputs['featured'] = 1;
        }

$music->update($inputs);

        $request->session()->flash('music-message',' music was updated');
        return redirect()->route('dashboard.musics');

    }

    public function destroy(Request $request,Music $music){

        unlink($music->music);
        $music->delete();
        $request->session()->flash('music-message',' music was deleted');
        return redirect()->route('dashboard.musics');
    }

}
