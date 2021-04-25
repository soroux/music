<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Radio;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    //
    public  function index(){

        return view('dashboard.radio',['radios'=>Radio::all()]);
    }

    public  function edit(Radio $radio){

        return view('dashboard.radio-edit',['radio'=>$radio,'musics'=>Music::all()]);
    }

    public function update(Request $request,Radio $radio){

        $inputs = $request->validate([
            'name'=>'required',
            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }
        $musics = $request->musics;

        if ($request->musics) {
            $radio->musics()->detach();

            foreach ($musics as $music) {
                $music = Music::find($music);

                $radio->musics()->save($music);
            }
        }
        $radio->update($inputs);

        $request->session()->flash('radio-message',' Radio was updated');
        return redirect()->route('dashboard.radio');

    }

}
