@extends('layouts.app')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            @if(session('post-message'))
                <div class="alert alert-success">{{session('post-message')}}</div>
            @endif
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{$post->image}}" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-primary text-white">{{$post->title}}</h5>
                                <a href="#" class="text-white">{{$post->updated_at}}</a>
                            </div>
                        </div>
                        <a href="{{route('dashboard.post.edit',$post->id)}}" class="btn btn-app">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{route('dashboard.post.delete',$post->id)}}" method="post">
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
