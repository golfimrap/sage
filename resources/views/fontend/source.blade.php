@extends('layouts.template.template')
@section('content')
<main>
	<div class="professional-services section-bg d-none d-md-block" data-background="assets/img/gallery/section_bg04.jpg"></div>

	<div class="profession-caption">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-8">
					<div class="section-tittle profession-details">
						<span>Advisory Board of the Minister of Public Health</span>
                        <h2>คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข เกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุขกรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019</h2>
                        <p>ประเทศไทยได้เปิดศูนย์ปฏิบัติการภาวะฉุกเฉิน กรณีโรคปอดอักเสบรุนแรงจากเชื้อไวรัส (ชื่อขณะนั้น) โดยกรมควบคุมโรค ตั้งแต่วันที่ 3 มกราคม 2563 เพื่อติดตามสถานการณ์ เฝ้าระวังและคัดกรองผู้เดินทางจากจีน ทำให้พบผู้ติดเชื้อไวรัสโคโรนา 2019 รายแรกในประเทศไทยเมื่อวันนี่ 13 มกราคม 2563 หลังจากนั้น เมื่อวันที่ 27 มกราคม 2563 รัฐบาลได้ยกระดับให้ศูนย์ปฏิบัติการนายกรัฐมนตรี ติดตามและประเมินสถานการณ์จากต่อเนื่อง </p>
                                
                        <p>คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุขเกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019 ถูกแต่งตั้งขึ้นเมื่อวันที่ 5 กุมภาพันธ์ 2563 ประกอบด้วย อดีตผู้บริหารระดับสูงกระทรวงสาธารณสุข ผู้เชี่ยวชาญด้านระบาดวิทยา ผู้เชี่ยวชาญด้านไวรัสวิทยา ผู้เชี่ยวชาญด้านกุมารแพทย์ รวม 23 ท่าน เพื่อทำหน้าที่ประเมินสถานการณ์ แนวโน้มและความเสี่ยงของเหตุการณ์ภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019 พร้อมทั้งจัดทำข้อเสนอแนะเชิงนโยบายและยุทธศาสตร์ ข้อพิจารณาต่อรัฐมนตรีว่าการกระทรวงสาธารณสุข เพื่อเสนอต่อรัฐบาล ในการบริหารจัดการเพื่อลดการแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 </p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
							<ul class="list cat-list">
								<li>
									<a href="{{URL::asset('assets/file/command/command113.pdf')}}" class="d-flex">
										<p>คำสั่ง 113/2536 ลงวันที่ 5 ก.พ.63</p>
									</a>
								</li>
								<li>
									<a href="{{URL::asset('assets/file/command/command229.pdf')}}" class="d-flex">
										<p>คำสั่ง 229/2563 ลงวันที่ 26 ก.พ.63</p>
									</a>
								</li>
								<li>
									<a href="{{URL::asset('assets/file/command/command515.pdf')}}" class="d-flex">
										<p>คำสั่ง 515/2563 ลงวันที่ 29 เม.ย.63</p>
									</a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services Ara Start -->
	<div class="services-area section-padding3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="cl-xl-7 col-lg-8 col-md-10">
					<!-- Section Tittle -->
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
								<a href="{{asset('storage/img/consult/'.$value_advisor->advisor_pic)}}">
									<img src="{{asset('storage/img/consult/'.$value_advisor->advisor_pic)}}" alt="">
								</a>
							</div>
							<div class="services-caption">
								<h3><a href="{{asset('storage/img/consult/'.$value_advisor->advisor_pic)}}">{{ $value_advisor->prefix }}{{ $value_advisor->name }} {{ $value_advisor->surname }}</a></h3>
								<p class="pera1">{{ $value_advisor->position }}</p>
								<p class="pera2">{{ $value_advisor->position }}</p>
							</div>
						</div>
					</div>
				@endforeach
            </div>
        </div>
    </div>
    <!-- Services Ara End -->
	<!-- <div class="brand-area pt-120 pb-120">
		<div class="container">
			<div class="brand-active brand-border pt-50 pb-40">
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand1.png')}}" alt="">
				</div>
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand2.png')}}" alt="">
				</div>
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand3.png')}}" alt="">
				</div>
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand4.png')}}" alt="">
				</div>
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand2.png')}}" alt="">
				</div>
				<div class="single-brand">
					<img src="{{URL::asset('assets/img/gallery/brand5.png')}}" alt="">
				</div>
			</div>
		</div>
	</div> -->
	@include('layouts.template.beforefooter')
</main>
@endsection