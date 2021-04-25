@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            @if(session('comment-message'))
                <div class="alert alert-success">{{session('comment-message')}}</div>
            @endif
            <h3 class="card-title">All Comments</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Post Title</th>
                    <th>Comment</th>
                    <th>Approved</th>
                    <th>Un Approved</th>
                    <th>Delete</th>
                    <th>Created_at</th>



                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->post->title}}</td>
                    <td>{{$comment->content}}</td>

                    <form method="post" action="{{route('dashboard.comment.update',$comment)}}">
                        @csrf
                        @method('patch')
                        <td>

                            <input type="hidden" name="id" value="{{$comment->id}}">
                            <button @if($comment->status == 'verified') disabled @endif class="btn btn-outline-success" value="verified" name="status">Approve</button>
                        </td>
                        <td>
                            <input type="hidden" name="id" value="{{$comment->id}}">
                            <button @if($comment->status == 'unverified') disabled @endif class="btn btn-outline-warning" value="unverified" name="status">Unapprove</button>
                        </td>
                    </form>

                    <td>
                        <form action="{{route('dashboard.comment.destroy',$comment->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" >Delete</button>
                        </form>
                    </td>

                    <td>{{$comment->created_at}}</td>

                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Post Title</th>
                    <th>Comment</th>
                    <th>Approved</th>
                    <th>Un Approved</th>
                    <th>Delete</th>
                    <th>Created_at</th>

                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
