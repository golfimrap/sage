<header>
	<div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <!-- <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div> -->
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                              <a href="{{ ('/') }}"><img src="assets/img/logo/logo_moph.png" alt=""></a>
                                <li><a href="{{ ('/') }}">หน้าหลัก</a></li>
                               <!--  <li><a>คณะที่ปรึกษา</a>
                                    <ul class="submenu"> -->
                                        <li><a href="{{ route('source') }}">ที่ปรึกษา</a></li>
                                        <!-- <li><a href="{{ route('history') }}">ที่ปรึกษา</a></li> -->
                                   <!--  </ul>
                                </li> -->
                                <li><a href="{{ route('timeline') }}">ไทม์ไลน์</a></li>
                                <li><a>เอกสารเผยแพร่</a>
                                    <ul class="submenu">
                                        <li><a href="{{ URL::to('https://fliphtml5.com/bookcase/dmkfb') }}" target="_blank">บทความ / Article</a></li>
                                        <li><a href="{{ route('poster') }}">โปสเตอร์ / Poster</a></li>
                                        <li><a href="{{ route('caption') }}">แคปชั่น / Caption</a></li>
                                        <li><a href="{{ route('gallery') }}">แกลอรี่ / Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">ข้อคิดที่ปรึกษา</a></li>
                                <li><a href="{{ route('news') }}">ข่าวที่น่าสนใจ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header-btn -->
                    <div class="header-btns d-none d-lg-block f-right">
                        <a href="{{ route('contact') }}" class="btn header-btn">ติดต่อเรา</a>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>