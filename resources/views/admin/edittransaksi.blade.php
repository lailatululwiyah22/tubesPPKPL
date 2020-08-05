<!DOCTYPE html>
<html>
<head>
	<title>Edit paket</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2>Edit Paket </h2>

	<a href="/paket"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/paket/update/{{ $paket->id_transaksi }}" method="post" enctype="multipart/form-data">
		@method('put')
		@csrf
		<lable>Id_Paket : </lable>
	 	<input type="text" required="required" name="id_paket" value="{{ $paket->id_paket }}"><br>
	 	<lable>Nama Paket : </lable>
	 	<input type="text" required="required" name="name" value="{{ $paket->name }}"><br>
	 	<lable>Durasi : </lable>
	 	<input type="text" required="required" name="durasi" value="{{ $paket->durasi }}"><br>
		<lable>Harga : </lable>
 		<input type="text" required="required" name="harga" value="{{ $paket->harga }}"><br>
		<lable>Jenis_Paket : </lable>
 		<input type="text" required="required" name="jenis_paket" value="{{ $paket->jenis_paket }}"><br>
		<lable>Fasilitas : </lable>
		<input type="text" required="required" name="fasilitas" value="{{ $paket->fasilitas }}"><br>
		<lable>Foto : </lable>
		<div class="form-group">
		<input type="file" name="file" id="file" class="form-group"><br>
		</div>
		<div class="row">
					        <div class="col s6">
					            <img width="150px" src="{{ url('/uploads/file/'.$paket->file) }}">
					        </div>
					    </div>
<input type="submit"  value="Simpan" class="btn btn-primary">


		

</body>
</html>