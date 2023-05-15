@section('NavBar')
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('Index') }}">
                <img src="{{ asset('site/img/logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-center">
                    <li class="nav-item {{ Route::is('Index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::is('Post') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Post') }}">Blog</a>
                    </li> 
                    <li class="nav-item {{ Route::is('About') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('About') }}">About US</a>
                    </li> 
                    <li class="nav-item {{ Route::is('Contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Contact') }}">Contact</a>
                    </li> 
                </ul>
                <form class="d-flex" action="{{route('PostSearch')}}" method="GET">
                    <input name="title" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>

                <ul class="nav navbar-nav navbar-right navbar-social">
                    @foreach ($social as $soc)
                    <li>
                        <a href="{{ $soc->url }}">
                            {!! $soc->icon  !!}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <div class="d-flex">
                    <a href="{{ route('adminka') }}" class="btn btn-outline-warning">Admin Panel</a>
                </div>

                </div> 
            </div>
        </nav>
    </div>
</header>
@show