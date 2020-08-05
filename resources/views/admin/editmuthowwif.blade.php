<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Muthowwif</title>
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
	
    
</head>
<body>

	<h2>Edit Muthowwif</h2>

	<a href="/muthowwif"> Kembali</a>
	
	<br/>
	<br/>

	<div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">


	  					<form action="/muthowwif/update/{{ $muthowwif->id_muthowwif }}" method="POST" enctype="multipart/form-data">
	  	@method('put')
		@csrf


		<lable>Id_Muthowwif : </lable>
	 	<input type="text" required="required" name="id_muthowwif" value="{{ $muthowwif->id_muthowwif }}"><br>
	 	<lable>Foto : </lable>
	 	<div class="form-group">
		<input type="file" name="file" id="file" class="form-group"><br>
		</div>
		<div class="row">
					        <div class="col s6">
					            <img width="150px" src="{{ url('/uploads/file/'.$muthowwif->file) }}">
					        </div>
					    </div>
	 	<lable>Nama_Muthowwif : </lable>
	 	<input type="text" required="required" name="nama_muthowwif" value="{{ $muthowwif->nama_muthowwif }}"><br>
		<lable>Umur : </lable>
 		<input type="text" required="required" name="umur" value="{{ $muthowwif->umur }}"><br>
		<lable>Alamat : </lable>
 		<input type="text" required="required" name="alamat" value="{{ $muthowwif->alamat }}"><br>

	
<input type="submit"  value="Simpan" class="btn btn-primary">

		</form>
                        
					</div>
				</div>
			</div>
		

</body>
</html>