@extends('layouts.template.template')
@section('content')
<main>
	<!--? Hero Start -->
	<div class="slider-area2">
	 	<div class="slider-height2 hero-overly d-flex align-items-center">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-xl-12">
	 					<div class="hero-cap hero-cap2 text-center pt-80">
	 						<h2 style="color: black;">Contact US</h2>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	</div>
	<!-- Hero End -->
	<!-- ================ contact section start ================= -->
	<section class="contact-section">
	 	<div class="container">
	 		<div class="d-none d-sm-block mb-5 pb-4">
	 			<!-- Map Section Begin -->
	 			<div class="map spad">
	 				<div class="container">
	 					<div class="contact-title">
	 						<h4>แผนที่ตั้ง</h4>
	 					</div>
	 					<div class="map-inner">
	 						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.76018221009!2d100.52495331414403!3d13.853428898664347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b5fc50be2fd%3A0xfcbdc03279eb9bdf!2z4LiB4Lij4Lih4LiE4Lin4Lia4LiE4Li44Lih4LmC4Lij4LiEIOC4geC4o-C4sOC4l-C4o-C4p-C4h-C4quC4suC4mOC4suC4o-C4k-C4quC4uOC4gg!5e0!3m2!1sth!2sth!4v1578302055894!5m2!1sth!2sth" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	 					</div>
	 				</div>
	 			</div>
	 			<!-- Map Section Begin -->

	 		</div>
	 		<div class="row">
	 			<!-- <div class="col-12">
	 				<h2 class="contact-title">กรุณาส่งข้อความ</h2>
	 			</div>
	 			<div class="col-lg-8">
	 				<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
	 					<div class="row">
	 						<div class="col-12">
	 							<div class="form-group">
	 								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
	 							</div>
	 						</div>
	 						<div class="col-sm-6">
	 							<div class="form-group">
	 								<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
	 							</div>
	 						</div>
	 						<div class="col-sm-6">
	 							<div class="form-group">
	 								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
	 							</div>
	 						</div>
	 						<div class="col-12">
	 							<div class="form-group">
	 								<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
	 							</div>
	 						</div>
	 					</div>
	 					<div class="form-group mt-3">
	 						<button type="submit" class="button button-contactForm boxed-btn">Send</button>
	 					</div>
	 				</form>
	 			</div> -->
	 			<div class="col-lg-3 offset-lg-1">
	 				<div class="media contact-info">
	 					<span class="contact-info__icon"><i class="ti-home"></i></span>
	 					<div class="media-body">
	 						<h3>งานเลขานุการ </h3>
	 						<p>คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข เกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019</p>
	 					</div>
	 				</div>
	 				<div class="media contact-info">
	 					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
	 					<div class="media-body">
	 						<h3>Email :</h3>
	 						<p>sage.moph@ddc.mail.go.th</p>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	</section>
</main>
@endsection