@extends('layouts.app')

@section('content')

    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="{{route('dashboard.music.update',$music)}}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Music Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{$music->name}}" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Music Artist</label>
                <input type="text" class="form-control" name="artist" id="exampleInputEmail1" value="{{$music->artist}}" placeholder="Enter Artist">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Music Genre</label>
                <input type="text" class="form-control" name="genre" id="exampleInputEmail1" value="{{$music->genre}}" placeholder="Enter Genre">
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="featured" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Toggle If This music is Your Choice</label>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="form-group">
                <label for="exampleInputFile">Music ArtWork</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

