@extends('admin.template.template')

@section('style')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
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
                    <h1>Add Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('adminka') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('categorylist') }}">Category List</a>
                        </li>
                        <li class="breadcrumb-item active">Add Category</li>
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
                            Add Category
                        </h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('categoryAdd') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="category" type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-block btn-success btn-lg">Add Category</button>
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

    });
</script>

@endsection