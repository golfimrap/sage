@extends('layouts.template.template')
@section('timelinecss')
<link rel="stylesheet" href="{{URL::asset('assets/css/timeline.css')}}">
@endsection
@section('content')
<main>
	<div class="home-blog-area section-padding30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-tittle text-center mb-70">
						<h2>Thailalnd Covid-19 Response Timeline</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-timeline7">
						<div class="timeline">
							<div class="timeline-icon"><i class="fa fa-globe"></i></div>
							<span class="year"><b>เมษายน</b></span>
							<div class="timeline-content">
								<h5 class="title">วันที่ 2 เมษายน 2563</h5>
								<h6 align = 'left' p class="description">
									<i class="fa fa-plus-square" aria-hidden="true"></i>
                                    มีข่าวแรงงานไทยในประเทศเกาหลีใต้เดินทางกลับประเทศ</br>
								</h6>
							</div>
						</div>
						<div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><b>April</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 2 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ประกาศห้ามประชาชนออกนอกเคหะสถานทั่วราชอาณาจักร (เคอร์ฟิว) และสั่งห้ามไม่ให้คนต่างชาติและคนไทยเดินทางเข้าประเทศไทย                                   
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 4 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        สำนักงานการบินพลเรือนแห่งประเทศ ห้ามเครื่องบินทุกประเทศและผู้โดยสารเข้าประเทศไทย 3 วัน และได้ห้ามต่อเนื่องมาจนถึงปัจจุบัน                                     
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 7 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                       คณะรัฐมนตรีมีมติเลื่อนการเปิดภาคเรียนที่ 1/2563 เป็นวันที่ 1 กรกฎาคม 63</br>                                        
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 8 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        กระทรวงวัฒนธรรมออกประกาศห้ามจัดงานสงกรานต์</br>                                       
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 13 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ผู้ว่าราชการจังหวัดทั่วประเทศไทย ได้พิจารณาออกคำสั่งปิดร้านค้าและสถานประกอบการจำหน่ายสุราเป็นการชั่วคราว</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>
                       

                         <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 21 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        คณะที่ปรึกษาฯ เสนอการจัดการปัญหาต่อนายกรัฐมนตรี  เรื่อง ข้อเสนอการจัดการปัญหาโรคติดเชื้อไวรัสโคโรนา 2019: การเปลี่ยนผ่านจากมาตรการ "กึ่งล๊อกดาวน์" เข้าสู่มาตรการ "สร้างเสถียรภาพ"</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 28 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ประกาศใช้ พระราชกำหนดการบริหาร ราชการในสถานการณ์ฉุกเฉิน ต่ออีก 1 เดือน ถึงวันที่ 31 พฤษภาคม 2563</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 29 เมษายน 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        แต่งตั้งคณะที่ปรึกษาเพิ่มเติม คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุขเกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019   (คำสั่ง 515/2563 ลงวันที่ 29 เม.ย.63)</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-timeline7">
                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <span class="year"><b>มีนาคม</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 2 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        มีข่าวแรงงานไทยในประเทศเกาหลีใต้เดินทางกลับประเทศ</br>                                          
                                    </h6>
                                </p>  
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><b>March</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 5 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ประกาศพื้นที่นอกราชอาณาจักรที่เป็นเขตติดโรคติดต่ออันตราย                                   
                                    </h6>
                                </p>
                            </div>
                        </div>


                       <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 6, 8 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        รายการมวยที่สนามมวยลุมพินี และสนามมวยราชดำเนิน                                    
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 12 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                       สำนักนายกรัฐมนตรีออกคำสั่งจัดตั้งศูนย์บริหารสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (โควิด 19)</br>                                        
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 13 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ผู้มีชื่อเสียงที่ทำหน้าที่พิธีกรในสนามมวยประกาศตัวว่าติดเชื้อโควิด 19</br>
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>                  สถานเอกอัครราชทูตไทย ณ กรุงกัวลาลัมเปอร์ประกาศขอให้คนไทยที่เข้าร่วมงานดาวะห์ และผู้ติดตามใกล้ชิดเข้าร่วมกิจกรรมดังกล่าวไปพบแพทย์ทันที                                       
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 17 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        คณะรัฐมนตรีมีมติเห็นชอบมาตรการเร่งด่วน และให้ปิดมหาวิทยาลัย โรงเรียนนาชาติ สถาบันกวดวิชา ผับ สถานบันเทิง สถานบริการ นวดแผนโบราณและโรงมหรสพ ในพื้นที่กรุงเทพฯและปริมณฑล และงดการจัดกิจกรรมรวมคนจำนวนมากที่มีความเสี่ยงสูงต่อการแพร่ระบาดของโรค</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>
                       

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 21 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ผู้ว่าฯ กทม. ประกาศกิจการและสถานที่เสี่ยงบางประเภททั่วกรุงเทพฯ เป็นเวลา 22 วัน ทำให้ผู้คนเดินทางกลับภูมิลำเนาเป็นจำนวนมาก และพบการรายงานผู้ป่วยในต่างจังหวัดเพิ่มขึ้นเป็นช่วงสั้นๆ</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 24 มีนาคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ประกาศพระราชกำหนดการบริหารราชการในสถานการณ์ฉุกเฉิน พ.ศ. 2548 โดยให้มีผลบังคับใช้ในวันที่ 26 มีนาคม 2563</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<hr>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-timeline7">
						<div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <span class="year"><b>กุมภาพันธ์</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 4 กุมภาพันธ์ 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        รับคนไทย 138 คนจากเมืองอู่ฮั่นกลับประเทศไทย โดยได้รับตัวไว้สังเกตอาการในสถานที่รัฐจัดให้เป็นเวลา 14 วัน พบผู้ติดเชื้อ 1 คน </br>                                          
                                    </h6>
                                </p>  
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><b>February</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 5 กุมภาพันธ์ 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุขเกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019 
                                    <b><font color="#e77e21">(คำสั่ง 113/2536 ลงวันที่ 5 ก.พ.63)</font></b></br>                                       
                                    </h6>
                                </p>
                            </div>
                        </div>


                       <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 22 กุมภาพันธ์ 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        แต่งตั้งคณะที่ปรึกษาเพิ่มเติม คณะที่ปรึกษารัฐมนตรีว่าการกระทรวงสาธารณสุขเกี่ยวกับภาวะฉุกเฉินด้านการแพทย์และสาธารณสุข กรณีโรคปอดอักเสบจากเชื้อไวรัสโคโรนาสายพันธุ์ใหม่ 2019  
                                    <b><font color="#008b8b">(คำสั่ง 229/2563 ลงวันที่ 26 ก.พ.63)</font></b></br>                                       
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 29 กุมภาพันธ์ 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        คณะกรรมการโรคติดต่อแห่งชาติประกาศให้โรคติดเชื้อไวรัสโคโรนา 2019 เป็นโรคติดต่ออันตราย</br>
                                         <i class="fa fa-plus-square" aria-hidden="true"></i>                  ผู้ป่วยโรคติดเชื้อไวรัสโคโรนา 2019 เสียชีวิตเป็นรายแรก  

                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 13 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ไทยรายงานการพบผู้ป่วยรายแรก</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 31 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        พบผู้ป่วยคนไทยติดเชื้อในประเทศเป็นรายแรก</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-timeline7">
						<div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <span class="year"><b>มกราคม</b></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 3 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ประเทศจีนรายงานผู้ป่วยเพิ่มเติมเป็น 44 คน </br>  
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        กรมควบคุมโรคออกคำสั่ง <b><font color="#727cb6">เปิดศูนย์ปฏิบัติการภาวะฉุกเฉิน</font></b>
                                        </br>แต่งตั้งผู้บัญชาการเหตุการณ์</br>
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>   เตรียมความพร้อมคัดกรองและเฝ้าระวังโรคในกลุ่มผู้เดินทาง </br>จากเมืองอู่ฮั่น สาธารณรัฐประชาชนจีน
                                    </h6>
                                </p>  
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#e77e21"><b>January</b></font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 8 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        พบผู้ป่วยสงสัยเป็นผู้ป่วยโรคติดเชื้อไวรัสโคโรนา 2019 ผลการตรวจเบื้องต้นพบการติดเชื้อไวรัสโคโรนา ที่ไม่สามารถระบุสายพันธุ์ได้ชัดเจน</br>                                       
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 10 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ห้องปฏิบัติการศูนย์วิทยาศาสตร์สุขภาพโรคอุบัติใหม่ ของจุฬาลงกรณ์มหาวิทยาลัย ตรวจพบเชื้อ bat SARS-like coronavirus ในผู้ป่วย</br>                                       
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 11 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        จีนเปิดตัวเชื้อก่อโรค</br>                                      
                                    </h6>
                                </p>
                            </div>
                        </div>


                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 13 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        ไทยรายงานการพบผู้ป่วยรายแรก</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <span class="year"><font color="#FFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span>
                            <div class="timeline-content">
                                <h5 class="title">วันที่ 31 มกราคม 2563</h5>
                               <!--  <p class="description"> -->
                                    <h6 align = 'left' p class="description">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        พบผู้ป่วยคนไทยติดเชื้อในประเทศเป็นรายแรก</br>                                     
                                    </h6>
                                </p>
                            </div>
                        </div> 
					</div>
				</div>
			</div>
		</div>
	</div>
    @include('layouts.template.beforefooter')
</main>
@endsection