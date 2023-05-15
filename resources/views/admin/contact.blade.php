@extends('admin.template.template')

@section('style')

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}" />
<!-- CodeMirror -->
<link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/codemirror.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/plugins/codemirror/theme/monokai.css') }}" />
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{ asset('admin/plugins/simplemde/simplemde.min.css') }}" />
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('adminka') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Contact Edit</li>
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
                            Summernote
                        </h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('contactUpdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" type="text" class="form-control" placeholder="Address"
                                            value="{{ $contact->adress }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email"
                                            value="{{ $contact->email }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Phone Number"
                                            value="{{ $contact->phone }}">
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
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

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
        // Summernote
        $('#text').prop('disabled', false);
        $('#text').summernote({
            minHeight: 100,
            maxHeight: null,
            focus: true,
            styleWithSpan: false,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol']]
            ]
        });
        @if(Session::has('alert-success-contact'))
                Toast.fire({
                    icon: 'success',
                    title: " {{ Session::get('alert-success-contact') }}"
                })
            @endif
            
        @if(Session::has('alert-error-contact'))
            Toast.fire({
                icon: 'error',
                title: " {{ Session::get('alert-error-contact') }}"
            })
        @endif

        bsCustomFileInput.init();
    });
</script>

@endsection