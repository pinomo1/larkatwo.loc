@extends('admin.template.template')

@section('style')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}" />
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/codemirror.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/theme/monokai.css') }}" />
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{ asset('admin/plugins/simplemde/simplemde.min.css') }}" />

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Social</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('adminka') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('social') }}">Social List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Social</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">

                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Social
                        </h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('socialEdit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12" style="display: none">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input name="id" type="text" class="form-control" placeholder="ID" value="{{ $id }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $name }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input name="icon" type="text" class="form-control" placeholder="Icon" value="{{ $icon }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Url</label>
                                        <input name="url" type="text" class="form-control" placeholder="Url" value="{{ $url }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-block btn-success btn-lg">Submit</button>
                                </div>
                            </div>

                        </form>

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
<!-- bs-custom-file-input -->
<script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- CodeMirror -->
<script src="{{ asset('admin/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('admin/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('admin/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

<script>
    $(function () {

        var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            @if(Session::has('alert-success'))
                Toast.fire({
                    icon: 'success',
                    title: " {{ Session::get('alert-success') }}"
                })
            @endif
            
            @if(Session::has('alert-errors'))
                Toast.fire({
                    icon: 'error',
                    title: " {{ Session::get('alert-errors') }}"
                })
            @endif
        
    });
</script>

@endsection