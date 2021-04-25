@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            @if(session('music-message'))
                <div class="alert alert-success">{{session('music-message')}}</div>
            @endif
            <h3 class="card-title">All Musics</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Music Id</th>
                    <th>Music Name</th>
                    <th>Music Genre</th>
                    <th>Music artist</th>
                    <th>Music Status</th>
                    <th>Music size</th>
                    <th>Music Added_at</th>
                    <th>Edit info</th>
                    <th>Delete</th>


                </tr>
                </thead>
                <tbody>
                @foreach($musics as $music)
                <tr>
                    <td>{{$music->id}}</td>
                    <td>{{$music->name}}</td>
                    <td>{{$music->genre}}</td>
                    <td>{{$music->artist}}</td>
                    <th>@if($music->featured) Author Choice @endif</th>

                    <td>{{number_format($music->size/1048576,2).'MB'}}</td>
                    <td>{{$music->created_at}}</td>
                    <td><a href="{{route('dashboard.music.edit',$music->id)}}" class="btn btn-outline-warning">Edit</a></td>
                    <td>
                        <form action="{{route('dashboard.music.delete',$music->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" >Delete</button>
                        </form>
                    </td>


                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Music Id</th>
                    <th>Music Name</th>
                    <th>Music Genre</th>
                    <th>Music artist</th>
                    <th>Music Status</th>
                    <th>Music size</th>
                    <th>Music Added_at</th>
                    <th>Edit info</th>
                    <th>Delete</th>

                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
