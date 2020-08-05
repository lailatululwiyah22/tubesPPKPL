@extends('admin.template')

@section('content')
<div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
    <h2>Data Pengguna</h2>
    @if($pengguna->count())
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
         <thead align="center">
        <tr>
            <th>id Pengguna</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Asal</th>
            <th colspan="2">Action</th>
            </tr>
            </thead>
        @foreach($pengguna as $u)
        <tr>
            <td>{{ $u->id_pengguna }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->alamat }}</td>
            

            <td align="center" width="30px">
              <a href="/pengguna/editpengguna/{{ $u->id_pengguna }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
            <td align="center" width="30px">
              <a href="/pengguna/destroy/{{ $u->id_pengguna }}"class="btn btn-danger btn-sm">Hapus</a></td>         
        </tr>
        @endforeach            
    </table>
    </div>
    @else
       <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i> Data User tidak tersedia
       </div>
      @endif
      <br>
    <a href="/pengguna/tambahpengguna" class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Pengguna Baru</a>
</div>
</div>
@stop