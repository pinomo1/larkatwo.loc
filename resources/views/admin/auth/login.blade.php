@extends('admin.auth.app')

@section('login')

<div class="login-box">

    <div class="login-logo">
        <a href="{{ route('Index') }}"><b>Admin Panel</b> Larka</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Login" required autocomplete="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input name="remember" type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>

            </form>
        </div>
    </div>

</div>

@endsection