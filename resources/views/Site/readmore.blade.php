@extends('site.template.template')

@section('content')

<!--================ Hero sm banner start =================-->  
<section class="mb-30px">
    <div class="container">
        <div class="hero-banner hero-banner--sm" style="background: url( '{{ url('site/img/blog/'.$post->img )}}' ) no-repeat; background-size: cover;">
            <div class="hero-banner__content">
                <h1>{{ $post->title }}</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('Index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm banner end =================-->

<section class="blog-post-area section-margin">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_blog_details">

                    <div class="user_details">
                        <div class="float-left">
                            <a href="{{ route('Category', ['id' => $post->getCategorys->id]) }}">{{ $post->getCategorys->category }}</a>
                            <a href="{{ route('User', ['id' => $post->getUser->id]) }}">{{ $post->getUser->name }}</a>
                        </div>
                        <div class="float-right mt-sm-0 mt-3">
                            <div class="media">
                                <div class="media-body">
                                    <p>{{ $post->data }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! $post->text !!}
                </div>
            </div>
        <div>
    </div>

</section>

@endsection