<!DOCTYPE html>
<html>
<head>
	<title>input Manasik</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/manasik">Lihat Manasik Haji</a></h2>
	<h3>Manasik Haji</h3>

	<a href="/manasik"> Kembali</a>
	
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

	<form action="/manasik/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
	 @csrf
	<lable>Id_Manasik :</lable>
	 	<input type="text" name="id_manasik" class="form-group"><br>
	<lable>Nama Manasik</lable>
 		<input type="text" name="nama_manasik" class="form-group"><br>
 	<label for="id_muthowwif" class="col-sm-2 col-form-label">ID Muthowwif</label>
                    <div class="col-sm-5">
                      <select name="id_muthowwif" id="id_muthowwif" class="form-control">
                <option value="">== Pilih Muthowwif ==</option>
                @foreach ($muthowwif as $p)
                    <option value="{{ $p->id_muthowwif }}">{{ $p->id_muthowwif }}</option>
                @endforeach
                 </select>
	<lable>Tanggal </lable>
		<input type="date" name="tanggal" class="form-group"><br>
	<lable>Tempat</lable>
 		<input type="text" name="tempat" class="form-group"><br>
 	<lable>Waktu</lable>
 		<input type="time" name="waktu" class="form-group"><br>
 		
	<input type="submit"  value="Add" class="btn btn-primary">
</form>
	
</body>
</html>