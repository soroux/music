<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public  function index(){

        return view('dashboard.gallery',['galleries'=>Gallery::all()]);
    }

    public  function edit(Gallery $gallery){

        return view('dashboard.gallery-edit',['gallery'=>$gallery]);
    }
    public  function create(){

        return view('dashboard.gallery-create');
    }
    public function store(Request $request){

        $inputs = $request->validate([
            'name'=>'required',
            'title'=>'required',
            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }
        $gallery = auth()->user()->gallery()->create($inputs);
        $request->session()->flash('gallery-message',' Gallery was Created');
        return redirect()->route('dashboard.gallery');

    }

    public function update(Request $request,Gallery $gallery){

        $inputs = $request->validate([
            'name'=>'required',
            'title'=>'required',

            'content'=>'required',
        ]);

        if ($request->image){
            $inputs['image'] = $request->image->storeAs('images',$request->image->getClientOriginalName());

        }

        $gallery->update($inputs);

        $request->session()->flash('gallery-message',' Gallery was updated');
        return redirect()->route('dashboard.gallery');

    }

    public  function destroy(Request $request,Gallery $gallery){
        $gallery->delete();

        $request->session()->flash('gallery-message',' Gallery was Deleted');
        return view('dashboard.playlist');
    }
}
