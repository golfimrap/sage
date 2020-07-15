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
                              @foreach($data_type_search as $value_type_search)
                                <option value="{{ $value_type_search->id }}">
                                  {{ $value_type_search->type_search }}
                                </option>
                              @endforeach
                          </select>
                      </div>


                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>ปีที่ตีพิมพ์:</label>
                          <select type="option" class="form-control" placeholder="" >
                              <option>--กรุณาเลือก--</option>
                              @foreach($data_years as $value_years)
                                <option value="{{ $value_years->id }}">
                                  {{ $value_years->years }}
                                </option>
                              @endforeach                         

                          </select>
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ISBN:</label>
                          <select type="option" class="form-control" placeholder="" >
                            <option>--กรุณาเลือก--</option>
                              @foreach($data_isbn as $value_isbn)
                                <option value="{{ $value_isbn->id }}">
                                  {{ $value_isbn->isbn}}
                                </option>
                              @endforeach    
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
                               @foreach($data_disease as $value_disease)
                                <option value="{{ $value_disease->id }}">
                                  {{ $value_disease->disease }}
                                </option>
                              @endforeach                     
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
                        ชื่อเรื่อง
                      </th>
                      <th>
                        ตีพิมพ์
                      </th>
                      <th>
                        ISBN
                      </th>
                      <th>
                        อ่านออนไลน์
                      </th>    
                      <th>
                        ดาวน์โหลด
                      </th>                   
                    </thead>
                    @foreach($data_ebook as $value_ebook)
                        <tr>
                            <td>
                                {{ $value_ebook->id }}
                            </td>
                            <td> 
                                <img src="{{URL::asset('assets/img/cover/'.$value_ebook->cover_pic)}}" alt="" height="180">                            
                            </td>

                            <td>
                                {{ $value_ebook->topic }}
                            </td>
                            <td>
                                {{ $value_ebook->publish }}
                            </td>
                            <td>
                                {{ $value_ebook->ISBN }}
                            </td>
                            <td>
                                <div class="row">
                                  <div class="update ml-auto mr-auto">
                                    <a target="_blank" href="{{ $value_ebook->url }}" class="btn btn-round btn-primary">คลิกอ่าน</a>                                     
                                  </div>
                                </div>
                            </td>

                            <td> 
                                <a href="{{URL::asset('assets/file/ebook/'.$value_ebook->download)}}">                                    
                              <label class="btn"><i class="fa fa-download"></i> Download</label></a>                      
                            </td>

                        </tr>
                    @endforeach



                      
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