@extends('layouts.app')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            @if(session('radio-message'))
                <div class="alert alert-success">{{session('radio-message')}}</div>
            @endif
            <div class="row">
                @foreach($radios as $radio)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{$radio->image}}" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-primary text-white">{{$radio->name}}</h5>
                                <p class="card-text text-white pb-2 pt-1">{{$radio->content}}</p>
                                <a href="#" class="text-white">{{$radio->updated_at}}</a>
                            </div>
                        </div>
                        <a href="{{route('dashboard.radio.edit',$radio->id)}}" class="btn btn-app">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
