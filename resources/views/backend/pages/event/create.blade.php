@extends('backend.master')
@section('main-content')
    @include('backend.partial.breadcrumb', [
        'title1' => 'Create ' . ucwords($page),
        'title2' => ucwords($page),
        't' => 'list',
    ])
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.' . $page . '.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="question">Title {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="question" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="question">Slug {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="question" name="slug" required>
                                </div>
                                <div class="form-group">
                                    <label for="question">Start Date{!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="datetime-local" class="form-control" id="question" name="start_at"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="question">Completed Date</label>
                                    <input type="datetime-local" class="form-control" id="question" name="completed_date">
                                </div>
                                <div class="form-group">
                                    <label for="question">Capacity</label>
                                    <input type="number" class="form-control" id="question" name="capacity">
                                </div>
                                <div class="form-group">
                                    <label for="answer">Synopsis</label>
                                    <textarea class="textarea" id="editor1" name="synopsis"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="answer">Description</label>
                                    <textarea class="textarea" id="editor2" name="description"></textarea>
                                </div>
                               

                                <div class="form-group">
                                    <label for="exampleInputFile">Image </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sort">Sort {!! \App\Util\Util::htmlReq() !!}</label>
                                    <input type="text" class="form-control" id="sort" name="sort" value="1"
                                        required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                {{-- <a href="{{ route('admin.'.$page.'.index') }}" class="btn btn-danger
                            pull-right">Cancel</a> --}}
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
