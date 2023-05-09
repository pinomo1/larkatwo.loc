@extends('site.template.template')

@section('content')

<main class="site-main">
	<!--================Hero Banner start =================--> 
	<section class="mb-30px">
		<div class="container">
			<div class="hero-banner" style="background: url( '{{ url('site/img/ban/hero-banner.png')}}' ) left center no-repeat;">
				<div class="hero-banner__content">
					@foreach ($header as $head)
						<h3>{{ $head->title }}</h3>
						<h1>{{ $head->subtitle }}</h1>
						<h4>{{ $head->date }}</h4>
					@endforeach
				</div>
			</div>
		</div>
	</section>
</main>

<!--================ Blog slider start =================-->
<!--
<section>
	<div class="container">
		<div class="owl-carousel owl-theme blog-slider">
			<div class="card blog__slide text-center">
				<div class="blog__slide__img">
					<img class="card-img rounded-0" src="{{ asset('site/img/blog/blog-slider/blog-slide1.png') }}" alt="">
				</div>
				<div class="blog__slide__content">
					<a class="blog__slide__label" href="#">Fashion</a>
					<h3>
						<a href="#">New york fashion week's continued the evolution</a>
					</h3>
					<p>2 days ago</p>
				</div>
			</div>
			<div class="card blog__slide text-center">
				<div class="blog__slide__img">
					<img class="card-img rounded-0" src="{{ asset('site/img/blog/blog-slider/blog-slide2.png') }}" alt="">
				</div>
				<div class="blog__slide__content">
					<a class="blog__slide__label" href="#">Fashion</a>
					<h3>
						<a href="#">New york fashion week's continued the evolution</a>
					</h3>
					<p>2 days ago</p>
				</div>
			</div>
			<div class="card blog__slide text-center">
				<div class="blog__slide__img">
					<img class="card-img rounded-0" src="{{ asset('site/img/blog/blog-slider/blog-slide3.png') }}" alt="">
				</div>
				<div class="blog__slide__content">
					<a class="blog__slide__label" href="#">Fashion</a>
					<h3>
						<a href="#">New york fashion week's continued the evolution</a>
					</h3>
					<p>2 days ago</p>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!--================ Blog slider end =================--> 

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				@foreach ($artisans as $artisan)
					<div class="single-recent-blog-post">
						<div class="thumb">
							<img class="img-fluid" src="{{ asset('site/img/blog/'.$artisan->img) }}" alt="">
							<ul class="thumb-info">
								<li>
									<a href="{{route('User', ['id' => $artisan->getUser->id])}}">
										<i class="ti-user">{{$artisan->getUser->name}}</i>
									</a>
								</li>
								<li>
									<a href="#"><i class="ti-notepad"></i>{{ $artisan->data }}</a>
								</li>
							</ul>
						</div>
						<div class="details mt-20">
							<a href="#">
							<h3>
								{{ $artisan->title }}
							</h3>
							</a>
								<p class="tag-list-inline">Category: <a href="{{ route('Category', ['id' => $artisan->getCategorys->id]) }}">{{ $artisan->getCategorys->category }}</a></p>
								{!! $artisan->sub_text !!}
								<a class="button" href="{{ route('ReadMore', ['id' => $artisan->id]) }}">Read More <i class="ti-arrow-right"></i>
							</a>
						</div>
					</div>
				@endforeach

				<!-- 
				<div class="row">
					<div class="col-lg-12">
						<nav class="blog-pagination justify-content-center d-flex">
							<ul class="pagination">
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Previous">
										<span aria-hidden="true">
											<i class="ti-angle-left"></i>
										</span>
									</a>
								</li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Next">
										<span aria-hidden="true">
											<i class="ti-angle-right"></i>
										</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				-->
			</div>
			<!-- Start Blog Post Siddebar -->
			<div class="col-lg-4 sidebar-widgets">
				<div class="widget-wrap">
					<div class="single-sidebar-widget newsletter-widget">
						<h4 class="single-sidebar-widget__title">Newsletter</h4>
						<div class="form-group mt-30">
							<div class="col-autos">
								<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">

							</div>
						</div>
						<button class="bbtns d-block mt-20 w-100">Subcribe</button>
					</div>
					<div class="single-sidebar-widget post-category-widget">
						<h4 class="single-sidebar-widget__title">Catgory</h4>
						<ul class="cat-list mt-20">
							@foreach ($categorys as $category)
								<li>
									<a href="{{ route('Category', ['id' => $category->id]) }}" class="d-flex justify-content-between">
										<p>{{ $category->category }}</p>
										<p>({{ (count( $category->post )) }})</p>
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

