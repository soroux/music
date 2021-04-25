<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //

    public  function index(){

        return view('dashboard.slider',['sliders'=>Slider::all()]);
    }

    public  function edit(Slider $slider){

        return view('dashboard.slider-edit',['slider'=>$slider,'musics'=>Music::all()]);
    }

    public function update(Request $request,Slider $slider){

        $inputs = $request->validate([
                'title'=>'required',
                'content'=>'required',
            ]);

            if ($request->image){
                $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

            }
            $musics = $request->musics;

        if($request->musics){
                $slider->musics()->detach();
                foreach ($musics as $music) {
               $music = Music::find($music);
               $slider->musics()->save($music);
}
            }
            $slider->update($inputs);

            $request->session()->flash('slider-message',' Slider was updated');
            return redirect()->route('dashboard.slider');

        }

}
