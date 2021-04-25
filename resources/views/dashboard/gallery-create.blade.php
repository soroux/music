@extends('layouts.app')

@section('content')


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">gallery Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('dashboard.gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">gallery Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter gallery name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">gallery title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter gallery title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">gallery Content</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="content" placeholder="Enter gallery Content">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">gallery Image</label>
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
