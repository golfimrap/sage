@extends('layouts.template.template')
@section('content')
<main>
	<div class="slider-area2">
		<div class="slider-height2 hero-overly d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center pt-80">
							<h2>Gallery</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery-area pt-30 pb-40">
		<div class="container-fluid p-0 fix">
			<div class="row">
				@foreach($data_gallery as $value_gallery)
					@if (($value_gallery->id-1) % 13 == 0)
						<div class="col-xl-6 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 1)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 2)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 3)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 4)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 5)
						<div class="col-xl-6 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 6)
						<div class="col-xl-6 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 7)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 8)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 9)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 10)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 11)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@elseif (($value_gallery->id-1) % 13 == 12)
						<div class="col-xl-3 col-lg-4 col-md-6">
					@endif
							<div class="single-gallery mb-30">
								<div class="gallery-img" style="background-image: url({{URL::asset('storage/img/gallery/'.$value_gallery->gallery_pic)}});">
								</div>
								<div class="thumb-content-box">
									<div class="thumb-content">
										<a href="{{URL::asset('storage/img/gallery/'.$value_gallery->gallery_pic)}}"><i class="fas fa-angle-right"></i></a>
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