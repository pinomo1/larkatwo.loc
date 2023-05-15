@extends('admin.template.template')

@section('style')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- Toastr -->

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('adminka') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Post List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Post List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('blogadd') }}" type="button" class="btn btn-block btn-outline-success mb-3">Add</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artisans as $artisan)
                                    <tr>
                                        <td style="text-align: center;" class="namberTableID"></td>
                                        <td>{{ $artisan->title }}</td>
                                        <td>{{ $artisan->getCategorys->category }}</td>
                                        <td>
                                            <a href="{{ route('editPage', ['id' => $artisan->id]) }}" type="button" class="btn btn-block btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('postdelete', ['id' => $artisan->id]) }}" type="button" class="btn btn-block btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $artisans->links('vendor.pagination.table') }}
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection

@section('script')
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('admin/plugins/toastr/toastr.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.namberTableID').each(function(i) {
                var number = i + 1;
                $(this).html('<p style="font-weight: bold;">'+number+'</p>');
            });

            @if(Session::has('alert-success-add-post'))
                Toast.fire({
                    icon: 'success',
                    title: " {{ Session::get('alert-success-add-post') }}"
                })
            @endif

            @if(Session::has('alert-success-delete-post'))
                Toast.fire({
                    icon: 'success',
                    title: " {{ Session::get('alert-success-delete-post') }}"
                })
            @endif

            @if(Session::has('alert-success-delete-post-error'))
                Toast.fire({
                    icon: 'success',
                    title: " {{ Session::get('alert-success-delete-post-error') }}"
                })
            @endif
            
            @if(Session::has('alert-errors-add-post'))
                Toast.fire({
                    icon: 'error',
                    title: " {{ Session::get('alert-errors-add-post') }}"
                })
            @endif
        })
    </script>

@endsection