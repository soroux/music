@extends('layouts.app')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            @if(session('slider-message'))
                <div class="alert alert-success">{{session('slider-message')}}</div>
            @endif
            <div class="row">
                @foreach($sliders as $slider)
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="{{$slider->image}}" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-primary text-white">{{$slider->title}}</h5>
                            <p class="card-text text-white pb-2 pt-1">{{$slider->content}}</p>
                            <a href="#" class="text-white">{{$slider->updated_at}}</a>
                        </div>
                    </div>
                    <a href="{{route('dashboard.slider.edit',$slider->id)}}" class="btn btn-app">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
