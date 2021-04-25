@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Compose</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Compose</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('dashboard.email')}}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Folders</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="{{route('dashboard.email')}}" class="nav-link">
                                        <i class="fas fa-inbox"></i> Inbox
                                        <span class="badge bg-primary float-right">{{$unread}}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('dashboard.email.sent')}}" class="nav-link">
                                        <i class="far fa-envelope"></i> Sent
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Compose New Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{route('dashboard.email.send')}}" method="post">
                            @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="To:" value="{{$email->email}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" placeholder="Subject:" value="{{"RE".$email->subject}}">
                            </div>
                            <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" name="message" style="height: 300px">

                    </textarea>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">

                                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>

                            </div>
                            <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                        </form>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </section>

@endsection
