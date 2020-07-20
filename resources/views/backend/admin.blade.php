<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<form method="post" action="{{ route('form.insertadvisor') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<h3><center>Input Data Advisor</center></h3><br/>
		<label>คำนำหน้า :: </label>
		<input type="txt" name="prefix"><br/>
		<label>ชื่อ :: </label>
		<input type="txt" name="name"><br/>
		<label>นามสกุล :: </label>
		<input type="txt" name="surname"><br/>
		<label>ตำแหน่ง :: </label>
		<input type="txt" name="position"><br/>
		<label>รูปภาพ :: </label>
		<input type="file" name="advisor_pic"><br/>
		<input type="submit" value="submit">
	</form><br/>
	
	<h3><center>Delete Data Advisor</center></h3><br/>
	<table id="tbadvisor" class="display" style="width:100%">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					ชื่อ - นามสกุล
				</th>
				<th>
					ตำแหน่ง
				</th>
				<th>
					รูปภาพ
				</th>
				<th>
					delete
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data_advisor as $value_advisor)
			<tr>
				<td>
					{{ $value_advisor->id }}
				</td>
				<td>
					{{ $value_advisor->prefix }}{{ $value_advisor->name }} {{ $value_advisor->surname }}
				</td>
				<td>
					{{ $value_advisor->position }}
				</td>
				<td align="center">
					<img src="{{URL::asset('storage/img/consult/'.$value_advisor->advisor_pic)}}" alt="" width="20%">
				</td>
				<td>
					<a href = "{{ route('deleteAdvisor',$value_advisor->id) }}"><button>Delete</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table><br/>
	<hr>

	<h3><center>Add Poster</center></h3><br/>
	<form method="post" action="{{ route('form.insertposter') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>หัวข้อ :: </label>
		<input type="txt" name="topic"><br/>
		<label>วันที่ :: </label>
		<input type="txt" name="poster_date"><br/>
		<label>รูป Poster :: </label>
		<input type="file" name="poster_pic"><br/>
		<input type="submit" value="submit">
	</form>
	<h3><center>Delete Data Poster</center></h3><br/>
	<table id="tbposter" class="display" style="width:100%">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					หัวข้อ
				</th>
				<th>
					วันที่
				</th>
				<th>
					รูปภาพ
				</th>
				<th>
					Delete
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data_poster as $value_poster)
			<tr>
				<td>
					{{ $value_poster->id }}
				</td>
				<td>
					{{ $value_poster->topic }}
				</td>
				<td>
					{{ $value_poster->poster_date }}
				</td>
				<td align="center">
					<img src="{{URL::asset('storage/img/poster/'.$value_poster->poster_pic)}}" alt="" width="20%">
				</td>
				<td>
					<a href = "{{ route('deletePoster',$value_poster->id) }}"><button>Delete</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table><br/>
	<hr>

	<h3><center>Add Caption</center></h3><br/>
	<form method="post" action="{{ route('form.insertcaption') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>หัวข้อ :: </label>
		<input type="txt" name="topic_caption"><br>
		<label>Paragraph 1</label><br/>
		<textarea name="para1"></textarea><br/>
		<label>Paragraph 2</label><br/>
		<textarea name="para2"></textarea><br/>
		<input type="file" name="caption_pic"><br/>
		<label>ชื่อเจ้าของ Caption :: </label>
		<select name="advisor_id">
			@foreach($data_advisor as $value_advisor)
				<option value="{{ $value_advisor->id }}">
					{{ $value_advisor->name }} {{ $value_advisor->surname }}
				</option>
			@endforeach
		</select>
		<br><br>
		<input type="submit" value="submit">
	</form>
	<h3><center>Delete Data Caption</center></h3><br/>
	<table id="tbcaption" class="display" style="width:100%">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					หัวข้อ
				</th>
				<th>
					paragraph 1
				</th>
				<th>
					paragraph 2
				</th>
				<th>
					รูปภาพ
				</th>
				<th>
					Delete
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data_caption as $value_caption)
			<tr>
				<td>
					{{ $value_caption->id }}
				</td>
				<td>
					{{ $value_caption->topic_caption }}
				</td>
				<td>
					{{ $value_caption->para1 }}
				</td>
				<td>
					{{ $value_caption->para2 }}
				</td>
				<td align="center">
					<img src="{{URL::asset('storage/img/caption/'.$value_caption->caption_pic)}}" alt="" width="50%">
				</td>
				<td>
					<a href = "{{ route('deleteCaption',$value_caption->id) }}"><button>Delete</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table><br/>
	<hr>

	<h3><center>Add Gallery</center></h3><br/>
	<form method="post" action="{{ route('form.insertgallery') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>รูปภาพ :: </label>
		<input type="file" name="gallery_pic"><br/>
		<input type="submit" value="submit">
	</form>
	<h3><center>Delete Data Gallery</center></h3><br/>
	<table id="tbgallery" class="display" style="width:100%">
		<thead>
			<tr>
				<th>
					id
				</th>
				<th>
					รูปภาพ
				</th>
				<th>
					Delete
				</th>
			</tr>
		</thead>
		<tbody>
		@foreach($data_gallery as $value_gallery)
			<tr>
				<td>
					{{ $value_gallery->id }}
				</td>
				<td align="center">
					<img src="{{URL::asset('storage/img/gallery/'.$value_gallery->gallery_pic)}}" alt="" width="20%">
				</td>
				<td>
					<a href = "{{ route('deleteGallery',$value_gallery->id) }}"><button>Delete</button></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table><br/>
	<hr>

	<h3><center>Add VDO NEWS</center></h3><br/>
	<form method="post" action="{{ route('form.insertnewsvdo') }}">
		{{ csrf_field() }}
		<label>หัวข้อข่าว :: </label><br/>
		<textarea name="topic_news"></textarea><br/>
		<label>ผู้ให้ข่าว :: </label>
		<input type="txt" name="name"><br/>
		<label>วันที่ :: </label>
		<input type="txt" name="date_news"><br/>
		<label>URL VDO :: </label>
		<input type="text" name="url"><br/>
		<label>ประเภทข้อมูล :: VDO</label>
		<input type="hidden" name="type" value="vdo"><br/>
		<input type="submit" value="submit">
	</form>
	<br/><hr>
	<h3><center>Add TEXT NEWS</center></h3><br/>
	<form method="post" action="{{ route('form.insertnewstext') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>หัวข้อข่าว :: </label><br/>
		<textarea name="topic_news"></textarea><br/>
		<label>ผู้ให้ข่าว :: </label>
		<input type="txt" name="name"><br/>
		<label>วันที่ :: </label>
		<input type="txt" name="date_news"><br/>
		<label>URL ข่าว :: </label>
		<input type="text" name="url"><br/>
		<label>รูปภาพข่าว :: </label>
		<input type="file" name="news_pic"><br/>
		<label>ประเภทข้อมูล :: ข้อความ</label>
		<input type="hidden" name="type" value="text"><br/>
		<input type="submit" value="submit">
	</form><br/><br/>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#tbadvisor').DataTable( {
			// "order": [[ o, "desc" ]]
			"scrollX": true
	    });
	});

	$(document).ready(function() {
	    $('#tbposter').DataTable( {
			"order": [[ 0, "desc" ]],
			"scrollX": true
	    });
	});

	$(document).ready(function() {
	    $('#tbcaption').DataTable( {
			"order": [[ 0, "desc" ]],
			"scrollX": true
	    });
	});

	$(document).ready(function() {
	    $('#tbgallery').DataTable( {
			"order": [[ 0, "desc" ]],
			"scrollX": true
	    });
	});
</script>