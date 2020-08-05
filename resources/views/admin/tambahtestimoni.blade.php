<!DOCTYPE html>
<html>
<head>
	<title>Tambah Testimoni</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="src/asssets/images/favicon.ico" />
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>

	<h2><a href="/testi">Lihat Data Testimoni</a></h2>
	<h3>Data Testimoni</h3>

	@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
	<form action="/testimoni/store" method="POST" enctype="multipart/form-data">
			@csrf
			
			<div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label><br>
                    <div class="col-sm-5">
                       
                    <label for="username" class="col-sm-2 col-form-label">{{Session::get('username')}}</label><br>

  				 	<lable>Foto : </lable>
				 	<div class="form-group">
		<input type="file" name="file" id="file" class="form-group"><br>
		</div>
				 	<lable>Keterangan : </lable>
				 	<input type="text" name="keterangan" class="form-group"><br>
				 	<lable>Nama : </lable>
				 	<input type="text" name="nama" class="form-group"><br>
					<lable>Pekerjaan : </lable>
			 		<input type="text" name="pekerjaan" class="form-group"><br>
		
							
<input type="submit"  value="Add" class="btn btn-primary">
</form>
						
	<a href="/testimoni"> Kembali</a>

</form>
</body>
</html>