<!DOCTYPE html>
<html>
<head>
	<title>Tambah Invoice</title>
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

	<h2><a href="/pemesanan">Lihat Data Invoice</a></h2>
	<h3>Data Invoice</h3>

	@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
	<form action="/pemesanan/store" method="POST" enctype="multipart/form-data">
			 @csrf
			
			<div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label><br>
                    <div class="col-sm-5">
                       
                    <label for="username" class="col-sm-2 col-form-label">{{Session::get('username')}}</label><br>

                    <lable>Id_Pemesanan : </lable>
				 	<input type="text" name="id_pemesanan" class="form-group"><br>
				 	<lable>Jumlah_Pesan : </lable>
				 	<input type="text" name="jml_pesan" class="form-group"><br>
				 	<lable>Id_Paket : </lable>
				 	<input type="text" name="id_paket" class="form-group"><br>
				 	<lable>Id_Pengguna : </lable>
				 	<input type="text" name="id_pengguna" class="form-group"><br>
					<lable>No_telp : </lable>
			 		<input type="text" name="no_telp" class="form-group"><br>
		
							
<input type="submit"  value="Add" class="btn btn-primary">
</form>
						
	<a href="/pemesanan"> Kembali</a>

</form>
</body>
</html>