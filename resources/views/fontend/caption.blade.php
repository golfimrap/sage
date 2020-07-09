@extends('layouts.template.template')
@section('content')
<main>
	<div class="slider-area2">
		<div class="slider-height2 hero-overly d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center pt-80">
							<h2 style="color: black;">Instead of thank you</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="services-area section-padding3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="cl-xl-7 col-lg-8 col-md-10">
					<div class="section-tittle text-center mb-70">
						<span>แทนทำขอบคุณ</span>
						<h2>คำขอบคุณและให้กำลังใ</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data_caption as $value_caption)
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="single-services mb-200">
							<div class="services-img">
								<a href="{{URL::asset('storage/img/caption/'.$value_caption->caption_pic)}}">
									<img src="{{URL::asset('storage/img/caption/'.$value_caption->caption_pic)}}" alt="">
								</a>
							</div>
							<div class="services-caption">
								<h3><a href="{{URL::asset('storage/img/caption/'.$value_caption->caption_pic)}}">{{ $value_caption->topic_caption }}</h3>
								<p class="pera1">
									{{ $value_caption->para1 }}
								</p>
								<p class="pera2">
									{{ $value_caption->para2 }}
								</p>
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	@include('layouts.template.beforefooter')
</main>
@endsection