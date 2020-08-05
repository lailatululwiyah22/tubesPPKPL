<!DOCTYPE html>
<html>
<head>
	<title>Tambah Admin</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/adminn">Lihat Admin</a></h2>
	<h3>Admin</h3>

	<a href="/adminn"> Kembali</a>
	
	<br/>
	<br/>
	<br>
<form action="/adminn/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
{{ csrf_field() }}
	<lable>Id Adminn:</lable>
	 	<input type="text" name="id_admin" class="form-group"><br>
	<lable>Nama adminn</lable>
 		<input type="text" name="name" class="form-group"><br>
	<lable>Username </lable>
		<input type="text" name="username" class="form-group"><br>
	<lable>Password</lable>
 		<input type="password" name="password" class="form-group"><br>
	<input type="submit"  value="Add" class="btn btn-primary">
</form>
	
</body>
</html>