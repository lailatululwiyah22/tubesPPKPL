<!DOCTYPE html>
<html>
<head>

	<title>Edit Agenda Manasik</title>
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
</head>
<body>

	<h2>Edit Manasik
	<a href="/manasik"> Kembali</a>
	
	<br/>
	<br/>

	<div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">

	  					<form action="/manasik/update/{{ $manasik->id_manasik }}" method="post" enctype="multipart/form-data">
	  	@method('put')
		@csrf
		
		<lable>Id_Manasik : </lable>
		<input type="text" required="required" name="id_manasik" value="{{ $manasik->id_manasik }}"> <br/>
		<lable>Nama Manasik : </lable>
		<input type="text" required="required" name="nama_manasik" value="{{ $manasik->nama_manasik }}"> <br/>
		<label for="id_muthowwif" class="col-sm-2 col-form-label">ID Muthowwif</label>
                    <div class="col-sm-5">
                      <select name="id_muthowwif" id="id_muthowwif" class="form-control">
                <option value="">== Pilih Muthowwif ==</option>
                @foreach ($muthowwif as $p)
                    <option value="{{ $p->id_muthowwif }}">{{ $p->id_muthowwif }}</option>
                @endforeach
                 </select><br/>
        <lable>Tanggal : </lable>
		<input type="date" required="required" name="tanggal" value="{{ $manasik->tanggal }}"> <br/>
		<lable>Tempat : </lable>
		<input type="text" required="required" name="tempat" value="{{ $manasik->tempat }}"> <br/>
		<lable>Waktu : </lable>
		<input type="text" required="required" name="waktu" value="{{ $manasik->waktu }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
						
					</div>
				</div>
			</div>	

</body>
</html>