<!DOCTYPE html>
<html>
<head>
	<title>Edit pengguna</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2>Edit Pengguna</h2>

	<a href="/pengguna"> Kembali</a>
	
	<br/>
	<br/>
	

	@foreach($pengguna as $sh)
	<form action="/pengguna/update" method="post">
		{{ csrf_field() }}
		
	 	<lable>Email : </lable>
	 	<input type="text" required="required" name="email" value="{{ $sh->email }}"><br>
	 	<lable>Username : </lable>
	 	<input type="text" required="required" name="username" value="{{ $sh->username }}"><br>
		<lable>Password : </lable>
 		<input type="password" required="required" name="password" value="{{ $sh->password }}"><br>
		<lable>Alamat : </lable>
 		<input type="text" required="required" name="alamat" value="{{ $sh->alamat }}"><br>

	
<input type="submit"  value="Simpan" class="btn btn-primary">

		</form>
	@endforeach
		

</body>
</html>