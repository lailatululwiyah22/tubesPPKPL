<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Admin</title>
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

	<h2>Edit Admin</h2>

	<a href="/adminn"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($adminn as $a)
	<form action="/adminn/update" method="post">
		{{ csrf_field() }}
		Id <input type="text" required="required" name="id_admin" value="{{ $a->id }}"> <br/>
		nama Admin<input type="text" required="required" name="name" value="{{ $a->name }}"> <br/>
		username <input type="text" required="required" name="username" value="{{ $a->username }}"> <br/>
		password <input type="password" required="required" name="password" value="{{ $a->password }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>