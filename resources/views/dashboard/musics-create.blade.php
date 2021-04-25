@extends('layouts.app')

@section('content')

    @if(session('music-created-message'))
        <div class="alert alert-success">{{session('music-created-message')}}</div>
    @endif
    <div class="card card-primary">
        <!-- /.card-header -->
        <div class="card-header">
            <h3 class="card-title">Add Music</h3>
        </div>
        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="{{route('dashboard.musics.store')}}">
            @csrf
            <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Musics Genre</label>
                <input type="text" class="form-control" name="genre" id="exampleInputEmail1" placeholder="Enter Genre">
            </div>
            <div class="form-group">
                    <label for="exampleInputFile">Music input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="files[]" multiple required>
                            <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>

            </div>
            <!-- /.card-body -->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

