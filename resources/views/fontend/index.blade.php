@extends('layouts.template.template')
@section('content')
<main>
	<div class="slider-area">
        <div class="slider-active dot-style">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".4s">คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข</span>
                                <h5 data-animation="fadeInLeft" data-delay=".6s">เกี่ยวกับภาวะฉุกเฉินด้านการแพทย์ และสาธารณสุข <br>กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนา 2019</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".4s">เว็บไซต์คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุข</span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s">เกี่ยวกับภาวะฉุกเฉินด้านการแพทย์ และสาธารณสุข <br>กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนา 2019</h1>
                            </div>
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
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>หน้าหลัก</span>
                        <h2>HOME</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <a href="{{ route('timeline') }}">
                                <img src="assets/img/pic/timeline.jpg" alt="">
                            </a>
                        </div>
                        <div class="services-caption">
                            <h3><a href="{{ route('timeline') }}">Timeline</a></h3>
                            <p class="pera1">ไทม์ไลน์</p>
                            <p class="pera2">ไทม์ไลน์</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <a href="{{ URL::to('https://fliphtml5.com/bookcase/dmkfb') }}">
                                <img src="assets/img/pic/article.jpg" alt="">
                            </a>
                            </div>
                            <div class="services-caption">
                            <h3><a href="{{ URL::to('https://fliphtml5.com/bookcase/dmkfb') }}">Article </a></h3>
                            <p class="pera1">บทความ</p>
                            <p class="pera2">บทความ</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <a href="{{ route('poster') }}">
                                <img src="assets/img/pic/poster.jpg" alt="">
                            </a>
                        </div>
                        <div class="services-caption">
                             <h3><a href="{{ route('poster') }}">Poster</a></h3>
                            <p class="pera1">โปสเตอร์</p>
                            <p class="pera2">โปสเตอร์</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <a href="{{ route('caption') }}">
                                <img src="assets/img/pic/caption.jpg" alt="">
                            </a>
                        </div>
                        <div class="services-caption">
                            <h3><a href="{{ route('caption') }}">caption</a></h3>
                            <p class="pera1">แคปชั่น</p>
                            <p class="pera2">แคปชั่น</p>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <a href="{{ route('gallery') }}">
                                <img src="assets/img/pic/gallery.jpg" alt="">
                            </a>
                        </div>
                        <div class="services-caption">
                            <h3><a href="{{ route('gallery') }}">gallery</a></h3>
                            <p class="pera1">แกลอรี่</p>
                            <p class="pera2">แกลอรี่</p>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-services mb-200">
                        <div class="services-img">
                            <img src="assets/img/pic/Advisor.jpg" alt="">
                            </div>
                            <div class="services-caption">
                            <h3><a href="assets/img/pic/gallery.jpg">Advisor</a></h3>
                            <p class="pera1">ข้อคิดที่ปรึกษา</p>
                            <p class="pera2">ข้อคิดที่ปรึกษา</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Ara End -->
</main>
@endsection