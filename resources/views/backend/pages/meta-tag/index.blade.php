@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'List '.ucwords($page), 'title2'=>ucwords($page),'t'=>'create'])
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Meta Name / Title</th>
                                    <th>Meta Content</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <th>{{ $d->page }}</th>
                                    <td>{{ $d->meta_name }}</td>
                                    <td>{!! $d->meta_content !!}</td>
                                    <td>
                                        @include('backend.partial.action',
                                        ['delme'=>'yes','permission'=>null,'roles'=>null])
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop
