@extends('layouts.template.template')
@section('content')
<main>
	<!-- แก้ไขเนื้อหาจากในนี้ได้เลย -->
	<div class="slider-area2">
		<div class="slider-height2 hero-overly d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="hero-cap hero-cap2 text-center pt-80">
							<h2 style="color: black;">E-BOOK</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="../assets/js/create_data.js"></script>


</head>
	<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">



      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>

      </div>

      <!-- ไม่มีเมนูด้านซ้ายเอาออก -->
      <div class="sidebar-wrapper">
        <ul class="nav">
      
        </ul>
      </div>
    </div>


        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-single-02"></i>
                                    <span id="profile"></span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#" id="logout_btn">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- <div class="panel-header panel-header-lg">

            <canvas id="bigDashboardChart"></canvas>


</div> -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">ค้นหาหนังสือ</h5>
                                <!-- <p class="card-category">24 Hours performance</p> -->
                            </div>


                <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>ประเภทการค้นหา:</label>
                          <select type="option" class="form-control" placeholder="" >
                              <option>--กรุณาเลือก--</option>
                              <option>ชื่อเรื่อง</option>
                              <option>ชื่อผู้แต่ง</option>
                              <option>คำค้น</option>
                          </select>
                      </div>


                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>ปีที่สำเร็จ:</label>
                          <select type="option" class="form-control" placeholder="" >
                              <option>--กรุณาเลือก--</option>
                              <option>2550</option>
                              <option>2551</option>
                              <option>2552</option>
                              <option>2553</option>
                              <option>2554</option>
                              <option>2555</option>
                              <option>2556</option>
                              <option>2557</option>
                              <option>2558</option>
                              <option>2559</option>
                              <option>2560</option>
                              <option>2561</option>
                              <option>2562</option>
                              <option>2563</option>
                              <option>2564</option>
                              <option>2565</option>
                              <option>2566</option>
                              <option>2567</option>
                              <option>2568</option>
                              <option>2569</option>
                              <option>2570</option>                         

                          </select>
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">หน่วยงาน:</label>
                          <select type="option" class="form-control" placeholder="" >
                              <option>--กรุณาเลือก--</option>
                              <option>กลุ่มคุ้มครองจริยธรรม</option>
                              <option>กลุ่มตรวจสอบภายใน</option>
                              <option>กลุ่มพัฒนาระบบบริหาร</option>
                              <option>กองกฎหมาย</option>
                              <option>กองควบคุมโรคและภัยสุขภาพในภาวะฉุกเฉิน</option>
                              <option>กองงานคณะกรรมการควบคุมผลิตภัณฑ์ยาสูบ</option>
                              <option>กองนวัตกรรมและวิจัย</option>
                              <option>กองบริหารการคลัง</option>
                              <option>องบริหารทรัพยากรบุคคล</option>
                              <option>กองยุทธศาสตร์และแผนงาน</option>
                              <option>กองระบาดวิทยา</option>
                              <option>กองโรคจากการประกอบอาชีพและสิ่งแวดล้อม</option>
                              <option>กองโรคติดต่อทั่วไป</option>
                              <option>กองโรคติดต่อนำโดยแมลง</option>
                              <option>กองโรคป้องกันด้วยวัคซีน</option>
                              <option>กองโรคไม่ติดต่อ</option>
                              <option>กองโรคเอดส์และโรคติดต่อทางเพศสัมพันธ์</option>
                              <option>กองวัณโรค</option>
                              <option>ศูนย์พัฒนาวิชาการอาชีวอนามัยและสิ่งแวดล้อมจังหวัดสมุทรปราการ</option>
                              <option>ศูนย์สารสนเทศ</option>
                              <option>สถาบันบำราศนราดูร</option>     
                              <option>สถาบันป้องกันควบคุมโรคเขตเมือง</option>
                              <option>สถาบันราชประชาสมาสัย</option>
                              <option>สถาบันเวชศาสตร์ป้องกันศึกษา</option>
                              <option>สำนักงานคณะกรรมการควบคุมเครื่องดื่มแอลกอฮอล์</option>
                              <option>สำนักงานคณะกรรมการผู้ทรงคุณวุฒิ</option>
                              <option>สำนักงานความร่วมมือระหว่างประเทศ</option>
                              <option>สำนักงานบริหารโครงการกองทุนโลก</option>
                              <option>สำนักงานเลขานุการกรม</option>
                              <option>สำนักสื่อสารความเสี่ยงและพัฒนาพฤติกรรมสุขภาพ</option>
                              <option>ศูนย์นวตกรรมด้านสุขภาพและการป้องกันควบคุมโรค</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 1 เชียงใหม่</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 2 พิษณุโลก</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 3 นครสวรรค์</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 4 สระบุรี</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 5 ราชบุรี</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 6 ชลบุรี</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 7 ขอนแก่น</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 8 อุดรธานี</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 9 นครราชสีมา</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 10 อุบลราชธานี</option>
                              <option>สำนักงานป้องกันควบคุมโรคที่ 11 นครศรีธรรมราช</option>                     
                              <option>สำนักงานป้องกันควบคุมโรคที่ 12 สงขลา</option>  
                          </select>
                      </div>
                    </div>
                  </div>




                <div class="card-body">
                <form>
                  <div class="row">

                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>ประเภทกลุ่มโรค</label>
                        <select type="option" class="form-control" placeholder="" >
                              <option>--กรุณาเลือก--</option>
                              <option>CD</option>
                              <option>NCD</option>
                              <option>Injury</option>
                              <option>Aids and TB</option>
                              <option>Envocc </option>
                              <option>Behavior</option>
                              <option>Support</option>
                              <option>Management</option>                               
                          </select>
                      </div>
                    </div>

          <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ค้นหา</label>
                        <input type="email" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>


<div class="row">
          <div class="update ml-auto mr-auto">
            <a target="_blank" href="form_confirm.html" class="btn btn-round btn-primary">ค้นหา</a>
             <!--  <button class="btn btn-primary btn-round" id="create_btn">Submit</button> -->
          </div>
          </div>

  <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">รายการทั้งหมด</h4>
                <!-- <p class="card-category">กรุณาเลือกรายการที่ต้องการอนุมัติ</p> -->
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ลำดับที่
                      </th>
                      <th>
                        ปกหนังสือ
                      </th>
                      <th>
                        ชื่อเรื่อง (ภาษาไทย)
                      </th>
                      <th class="text-right">
                        ชื่อเรื่อง (ภาษาอังกฤษ) 
                      </th>
                      <th>
                        ชื่อผู้แต่ง
                      </th>
                      <th>
                        ปีที่ตีพิมพ์
                      </th>
                      <th class="text-auto">
                        หน่วยงาน
                      </th>
                      <th>
                        กลุ่มโรค
                      </th>
                      <th>
                        จำนวนดาวน์โหลด
                      </th>
                      <th class="text-auto">
                        จำนวนผู้เข้าชม
                      </th>
                      <th class="text-auto">
                        
                      </th>
                    </thead>




                      <tr>
                         <td>
                           1
                         </td>                 
                                              
                        <td>
                          pig รูปปกหนังสือ

                        </td>
                        <td>
                           การจัดการปัญหาโรคติดเชื้อไวรัสโคโรนา 2019:การเปลี่ยนผ่านจากมาตรการ “กึ่งล็อกดาวน์” เข้าสู่มาตรการ “สร้างเสถียรภาพ”
                        </td>
                        <td class="text-right">
                         Log Down
                        </td>
                        <td>
                          กรมควบคุมโรค
                        </td>
                        <td>
                          พฤษภาคม 2563
                        </td>
                        <td>                        
                            คณะผู้บริหารกระทรวงสาธารณสุข
                        </td>
                        <td>
                          CD
                        </td>
                        <td>
                          4
                        </td>
                        <td>                        
                          17
                        </td>  
                        <td>                        
                          ปุ่มรายละเอียด
                        </td>                  
                    </tr>



                    

                    
                      <tr>
                         <td>
                           2
                         </td>                 
                                              
                        <td>
                          pig รูปปกหนังสือ

                        </td>
                        <td>
                           กรอบแนวทางการจัดการปัญหาโรคติดเชื้อไวรัสโคโรนา 2019 ตามระยะของการระบาด
                        </td>
                        <td class="text-right">
                         Framework
                        </td>
                        <td>
                          กรมควบคุมโรค
                        </td>
                        <td>
                          พฤษภาคม 2563
                        </td>
                        <td>                        
                            คณะผู้บริหารกระทรวงสาธารณสุข
                        </td>
                        <td>
                          CD
                        </td>
                        <td>
                          4
                        </td>
                        <td>                        
                          17
                        </td>
                        <td>                        
                          ปุ่มรายละเอียด
                        </td>
                        
                      </tr>
                      </tr>



                         <td>
                           3
                         </td>                 
                                              
                        <td>
                          pig รูปปกหนังสือ

                        </td>
                        <td>
                           ปฏิบัติการตีกรอบล้อมไวรัส
                        </td>
                        <td class="text-right">
                         Frame the virus
                        </td>
                        <td>
                          กรมควบคุมโรค
                        </td>
                        <td>
                          พฤษภาคม 2563
                        </td>
                        <td>                        
                            คณะผู้บริหารกระทรวงสาธารณสุข
                        </td>
                        <td>
                          CD
                        </td>
                        <td>
                          4
                        </td>
                        <td>                        
                          17
                        </td>
                        <td>                        
                          ปุ่มรายละเอียด
                        </td>
                     </tr>
                     </tr>               

                         <td>
                           4
                         </td>                 
                                              
                        <td>
                          pig รูปปกหนังสือ

                        </td>
                        <td>
                           กรอบแนวทางการจัดการปัญหาโรคติดเชื้อไวรัสโคโรนา 2019 ตามระยะของการระบาด
                        </td>
                        <td class="text-right">
                         Framework2
                        </td>
                        <td>
                          กรมควบคุมโรค
                        </td>
                        <td>
                          พฤษภาคม 2563
                        </td>
                        <td>                        
                            คณะผู้บริหารกระทรวงสาธารณสุข
                        </td>
                        <td>
                          CD
                        </td>
                        <td>
                          4
                        </td>
                        <td>                        
                          17
                        </td>
                        <td>                        
                          ปุ่มรายละเอียด
                        </td>
                     </tr>
                      </tr>

                      </tr>

                                            
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




  <div class="row">
                            <div class="update ml-auto mr-auto">
                                <div class="row">
          <div class="update ml-auto mr-auto">
          <a target="_blank" href="https://fliphtml5.com/bookcase/dmkfb" class="btn btn-primary btn-round" id="create_btn">View</a>
          <a target="_blank" href="#" class="btn btn-primary btn-round" id="create_btn">Download</a>
             <!--  <button class="btn btn-primary btn-round" id="create_btn">Submit</button> -->
          </div>
          </div>
</body>

</html> 

	@include('layouts.template.beforefooter')
</main>
@endsection