<!DOCTYPE html>
<html>
<head>
	<title>input Paket</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/paket">Lihat Paket Haji dan Umroh</a></h2>
	<h3>Paket Haji dan Umroh</h3>

	

	
	<br/>
	<br/>
	<br>

		@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
<form action="/paket/proses"  method="POST" class="table table-striped table-hover table-sm table-bordered"  enctype="multipart/form-data">
	@csrf
	
	 	<lable>Nama Paket : </lable>
	 	<input type="text" name="name" id="name" class="form-group"><br>
	 	<lable>Durasi : </lable>
	 	<input type="text" name="durasi" id="durasi" class="form-group"><br>
		<lable>Harga : </lable>
 		<input type="text" name="harga" id="harga" class="form-group"><br>
		<lable>Jenis_Paket : </lable>
 		<input type="text" name="jenis_paket" id="jenis_paket" class="form-group"><br>
		<lable>Fasilitas : </lable>
		<input type="text" name="fasilitas" id="fasilitas" class="form-group"><br>
		<lable>Foto : </lable>
		<div class="form-group">
		<input type="file" name="file" id="file" class="form-group"><br>
		</div>
<input type="submit"  value="Add" class="btn btn-primary">
</form>

<a href="/paket"> Kembali</a>	
</body>
</html>