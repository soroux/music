@extends('layouts.app')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            @if(session('gallery-message'))
                <div class="alert alert-success">{{session('gallery-message')}}</div>
            @endif
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{$gallery->image}}" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-primary text-white">{{$gallery->name}}</h5>
                                <p class="card-text text-white pb-2 pt-1">{{$gallery->content}}</p>
                                <a href="#" class="text-white">{{$gallery->updated_at}}</a>
                            </div>
                        </div>
                        <a href="{{route('dashboard.gallery.edit',$gallery->id)}}" class="btn btn-app">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{route('dashboard.gallery.delete',$gallery->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                       <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
