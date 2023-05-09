@extends('site.template.template')

@section('content')

<!--================ Hero sm banner start =================-->  
<section class="mb-30px">
    <div class="container">
        <div class="hero-banner hero-banner--sm" style="background: url( '{{ url('site/img/ban/hero-banner.png')}}' ) left center no-repeat;">
            <div class="hero-banner__content">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('Index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm banner end =================--> 

<!--================ About start =================--> 
<section class="mb-30px">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">{{ $about->title }}</h2>
                {!! $about->text !!}
            </div>
        </div>
    </div>

</section>
<!--================ About end =================--> 

@endsection