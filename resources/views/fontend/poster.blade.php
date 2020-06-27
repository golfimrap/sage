@extends('layouts.template.template')
@section('content')
<main>
	<div class="home-blog-area section-padding30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-tittle text-center mb-70">
						<span>โปสเตอร์</span>
						<h2>Poster</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data_poster as $value_poster)
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="home-blog-single mb-30">
							<div class="blog-img-cap">
								<div class="blog-img">
									<img src="{{URL::asset('storage/img/poster/'.$value_poster->poster_pic)}}" alt="">
								</div>
								<ul>
									<li class="black-bg">{{ $value_poster->poster_date }}</li>
									<!-- <li>By Admin   -   30 Likes   -   4 Comments</li> -->
								</ul>
								<div class="blog-cap">
									<h3><a href="{{URL::asset('storage/img/poster/'.$value_poster->poster_pic)}}">{{ $value_poster->topic }}</a></h3>
									<a href="#" class="more-btn">Read more</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</main>
@endsection