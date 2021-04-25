@extends('layouts.app')

@section('content')


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Playlist Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('dashboard.playlist.update',$playlist->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">playlist Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$playlist->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">playlist Category</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="category" value="{{$playlist->category}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">playlist Content</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="content" value="{{$playlist->content}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">playlist Image</label>
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
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Select Musics </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="duallistbox" multiple="multiple" name="musics[]">

                                            @foreach($musics as $music)
                                            <option value="{{$music->id}}">{{$music->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
                            the plugin.
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
