<!DOCTYPE html>
<html>
<head>
	<title>Edit Invoice</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2>Edit invoice</h2>

	<a href="/admin/pemesanan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($data as $sh)
	<form action="/pemesanan/update" method="post">
		@method('put')
		@csrf

		<lable>Id_Pemesanan : </lable>
		 <input type="text" required="required" name="id_pemesanan" value="{{ $sh->id_pemesanan }}"><br>
		 <lable>no_ponsel : </lable>
	 	<input type="text" required="required" name="no_telp" value="{{ $sh->no_telp }}"><br>
	 	<lable>Jumlah_Pesan : </lable>
	 	<input type="text" required="required" name="jml_pesan" value="{{ $sh->jml_pesan }}"><br>
	 	<label for="id_paket" class="col-sm-2 col-form-label">ID Paket</label>
                    <div class="col-sm-5">
                      <select name="id_paket" id="id_paket" class="form-control">
                <option value="">== Pilih Paket ==</option>
                @foreach ($data as $p)
                    <option value="{{ $p->id_paket }}">{{ $p->id_paket }}</option>
                @endforeach
                 </select><br/>
        <label for="id_pengguna" class="col-sm-2 col-form-label">ID Pengguna</label>
                    <div class="col-sm-5">
                      <select name="id_pengguna" id="id_pengguna" class="form-control">
                <option value="">== Pilih Pengguna==</option>
                @foreach ($data as $p)
                    <option value="{{ $p->id_pengguna }}">{{ $p->id_pengguna }}</option>
                @endforeach
                 </select><br/>
		<lable>Status : </lable>
 		<input type="text" required="required" name="status" value="{{ $sh->status }}"><br>

	
<input type="submit"  value="Simpan" class="btn btn-primary">
	@endforeach
		

</body>
</html>