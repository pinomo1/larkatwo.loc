.@extends('site.template.template')

@section('content')

<!--================ Hero sm banner start =================-->  
<section class="mb-30px">
    <div class="container">
        <div class="hero-banner hero-banner--sm" style="background: url( '{{ url('site/img/ban/hero-banner.png')}}' ) left center no-repeat;">
            <div class="hero-banner__content">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('Index') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm banner end =================-->

<!-- ================ contact section start ================= -->

<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info" style="margin: 15px 0;">
                    <span class="contact-info__icon">
                        <i class="ti-home"></i>
                    </span>
                    <div class="media-body">
                        <h3>{{ $contact->adress }}</h3>
                    </div>
                </div>
                <div class="media contact-info" style="margin: 15px 0;">
                    <span class="contact-info__icon">
                        <i class="ti-headphone"></i>
                    </span>
                    <div class="media-body">
                        <h3><a href="tel:454545654">{{ $contact->phone }}</a></h3>
                    </div>
                </div>
                <div class="media contact-info" style="margin: 15px 0;">
                    <span class="contact-info__icon">
                        <i class="ti-email"></i>
                    </span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">{{ $contact->email }}</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <form class="form-contact contact_form" action="{{ route('emailget') }}" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
					<div class="row">
                        <div class="col-lg-12">
                            @if(Session::has('alert-success-send-email'))
                                <div class="alert alert-success m-2" role="alert">
                                    {{ Session::get('alert-success-send-email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ================ contact section end ================= -->

@endsection