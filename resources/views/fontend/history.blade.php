@extends('layouts.template.template')
@section('content')
<main>
	<div class="slider-area2">
		<div class="slider-height2 hero-overly d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center pt-80">
							<h2 style="color: black;">History</h2>
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
						<span>Advisory Board of the Minister of Public Health</span>
						<h2>คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data_advisor as $value_advisor)
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="single-services mb-200">
							<div class="services-img">
								<a href="{{URL::asset('storage/img/consult/'.$value_advisor->advisor_pic)}}">
									<img src="{{URL::asset('storage/img/consult/'.$value_advisor->advisor_pic)}}" alt="">
								</a>
							</div>
							<div class="services-caption">
								<h3><a href="{{URL::asset('storage/img/consultant/'.$value_advisor->advisor_pic)}}">{{ $value_advisor->prefix }}{{ $value_advisor->name }} {{ $value_advisor->surname }}</a></h3>
								<p class="pera1">{{ $value_advisor->position }}</p>
								<p class="pera2">{{ $value_advisor->position }}</p>
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