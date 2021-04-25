@extends('layouts.app')

@section('content')


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Post Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('dashboard.post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Post title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter post Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">post Category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="category" placeholder="Enter post category">
                    </div>
                    <div class="form-group">

                        <label for="summernote">post Content</label>
                        <textarea name="content" id="summernote">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>

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
