@extends('layouts.template.template')
@section('content')
<style type="text/css">
	.services-area .single-services:hover .services-caption {
	  background: #fe9913;
	  transform: none;
	  -webkit-transition: none;
	  -moz-transition: none;
	  -ms-transition: none;
	  -o-transition: none;
	  transition: none;
	}

	.services-area .single-services .services-caption {
		padding: 33px 20px 30px 20px;
	}

	.services-area .single-services .services-caption h3::before {
		position: none;
	}
</style>
<main>
	<div class="slider-area2">
		<div class="slider-height2 hero-overly d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center pt-80">
							<h2 style="color: black;">Interesting news</h2>
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
						<span>ข่าวที่น่าสนใจ</span>
						<h2>Interesting news (VDO)</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data_news_vdo as $value_news_vdo)
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="single-services mb-200">
							<div class="services-img">
								<iframe width="100%" height="370" src="{{ $value_news_vdo->url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="services-caption">
								<p class="pera1">
									<b>หัวข้อข่าว ::</b> {{ $value_news_vdo->topic_news }}
								</p>
								<p class="pera2">
									<b>โดย :: </b> {{ $value_news_vdo->name }}<br/>
									<b>อัพเดท ณ วันที่ :: </b> {{ $value_news_vdo->date_news }}
								</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<hr>
			<div class="row">

			</div>
		</div>
	</div>
</main>
@endsection