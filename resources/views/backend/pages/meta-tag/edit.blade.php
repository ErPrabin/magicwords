@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'Edit '.ucwords($page), 'title2'=>ucwords($page), 't'=>'list'])
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.'.$page.'.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="page">Page {!! \App\Util\Util::htmlReq() !!}</label>
                                <select name="page" class="form-control" id="" required>
                                    <option value="" disabled selected>Choose Page</option>
                                    @foreach (config('menu.pages') as $p)
                                    <option value="{{ $p }}" {{ $p==$data->page?'selected':'' }}>{{ $p }}</option>
                                    @endforeach
                                    @foreach (\App\Models\Service::get() as $service)
                                    <option value="{{ $service->slug }}"
                                        {{ $service->slug==$data->page?'selected':'' }}> {{ $service->title }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="meta_name">Meta Name {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="text" class="form-control" id="meta_name" name="meta_name"
                                    value="{{ $data->meta_name }}" required>
                            </div>


                            <div class="form-group">
                                <label for="description">Meta Contnet {!! \App\Util\Util::htmlReq() !!}</label>
                                <textarea class="textarea" id="editor1" name="meta_content" required>
                                    {!! $data->meta_content !!}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="sort">Sort {!! \App\Util\Util::htmlReq() !!}</label>
                                <input type="text" class="form-control" id="sort" name="sort" value="1" required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('admin.'.$page.'.index') }}" class="btn btn-danger pull-right">Cancel</a>
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
