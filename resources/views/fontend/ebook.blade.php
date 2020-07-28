@extends('layouts.template.template')
@section('dataTable')
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection
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
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">รายการทั้งหมด</h4>
                <!-- <p class="card-category">กรุณาเลือกรายการที่ต้องการอนุมัติ</p> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tbebook" class="display" style="width:100%">
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
                        <tbody>
                            @foreach($data_ebook as $value_ebook)
                            <tr>
                                <td>
                                    {{ $value_ebook->id }}
                                </td>
                                <td> 
                                     <img src="{{URL::asset('storage/img/ebook/'.$value_ebook->cover_pic)}}" alt="" height="180">  
                                 </td>
                                 <td>
                                    {{ $value_ebook->topic }}
                                </td>
                                <td>
                                    {{ $value_ebook->publish }}
                                </td>
                                <td>
                                    {{ $value_ebook->isbn }}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <a target="_blank" href="{{ $value_ebook->url }}" class="btn btn-round btn-primary">คลิกอ่าน</a>
                                        </div>
                                    </div>
                                </td>
                                <td> 
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <a target="_blank" href="{{URL::asset('storage/file/ebook/'.$value_ebook->download)}}" class="btn btn-round btn-primary">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
	@include('layouts.template.beforefooter')

</main>
<script type="text/javascript">
        $(document).ready(function() {
            $('#tbebook').DataTable( {
                "order": [[ 0, "desc" ]]
                "scrollX": true
            });
        });
    </script>
@endsection
