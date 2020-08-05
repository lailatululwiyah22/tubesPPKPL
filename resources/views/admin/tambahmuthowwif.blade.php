<!DOCTYPE html>
<html>
<head>
	<title>Tambah Muthowwif</title>
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
	
    
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/muthowwif">Lihat Data Muthowwif</a></h2>
	<h3>Data Muthowwif</h3>

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
	<form action="/muthowwif/proses" method="POST" enctype="multipart/form-data" class="table table-striped table-hover table-sm table-bordered">
			@csrf
			
			

                    <lable>Id_Muthowwif : </lable>
				 	<input type="text" name="id_muthowwif" class="form-group"><br>
				 	<lable>Foto : </lable>
				 	<input type="file" name="file"><br>
				 	<lable>Nama_Muthowwif : </lable>
				 	<input type="text" name="nama_muthowwif" class="form-group"><br>
				 	<lable>Umur : </lable>
				 	<input type="text" name="umur" class="form-group"><br>
					<lable>Alamat : </lable>
			 		<input type="text" name="alamat" class="form-group"><br>
		
							
<input type="submit"  value="Add" class="btn btn-primary">
</form>
						
	<a href="/testimoni"> Kembali</a>
						

</form>
</body>
</html>