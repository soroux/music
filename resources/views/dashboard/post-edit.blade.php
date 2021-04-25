@extends('layouts.app')

@section('content')


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">post Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('dashboard.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">post Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">post Category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="category" value="{{$post->category}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">post Content</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="content" value="{{$post->content}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">post Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


@endsection
