@extends('site.template.template')

@section('content')

<!--================ Hero sm banner start =================-->  
<section class="mb-30px">
    <div class="container">
        <div class="hero-banner hero-banner--sm" style="background: url( '{{ url('site/img/ban/hero-banner.png')}}' ) left center no-repeat;">
            <div class="hero-banner__content">
                <h1>{{ $searchtitle }}</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('Index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $searchtitle }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach ($artisans as $artisan)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0" src="{{ asset('site/img/blog/'.$artisan->img) }}" alt="">
                                    <ul class="thumb-info">
                                        <li>
                                            <a href="{{route('User', ['id' => $artisan->getUser->id])}}">
                                                <i class="ti-user">{{$artisan->getUser->name}}</i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <a href="#"><i class="ti-notepad"></i>{{ $artisan->data }}</a>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="{{ route('ReadMore', ['id' => $artisan->id]) }}">
                                        <h3>
                                            {{ $artisan->title }}
                                        </h3>
                                        </a>
                                        {!! $artisan->sub_text !!}
                                        <a class="button" href="{{ route('ReadMore', ['id' => $artisan->id]) }}">Read More <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $artisans->links() }}
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm banner end =================-->

@endsection