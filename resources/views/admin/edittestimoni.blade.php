<!DOCTYPE html>
<html>
<head>

	<title>Edit Data Testimoni</title>
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

	<h2>Edit Testimoni</h2>

	<a href="/testimoni"> Kembali</a>
	
	<br/>
	<br/>

	<div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">
	  					

	  					<form action="/testimoni/update/{{ $testimoni->id_testimoni }}" method="POST" enctype="multipart/form-data">>
		@method('put')
		@csrf
		 
		 <lable>Foto : </lable>
		<div class="form-group">
		<input type="file" name="file" id="file" class="form-group"><br>
		</div>
		<div class="row">
					        <div class="col s6">
					            <img width="150px" src="{{ url('/uploads/file/'.$testimoni->file) }}">
					        </div>
					    </div>
		<lable>Keterangan : </lable>
		<input type="text" required="required" name="keterangan" value="{{ $testimoni->keterangan }}"> <br/>
		<lable>Nama : </lable>
		<input type="text" required="required" name="nama" value="{{ $testimoni->nama }}"> <br/>
		<lable>Pekerjaan : </lable>
		<input type="text" required="required" name="pekerjaan" value="{{ $testimoni->pekerjaan }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
                        
					</div>
				</div>
			</div>
		

</body>
</html>