@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Data Paket Haji dan Umroh</h2>   
      <table class="table table-striped table-hover table-sm table-bordered">
        <thead class="thead-dark">
            <tr> 
              <th>ID</th>
              <th>Nama Paket</th>
              <th>Durasi Hari</th>
              <th>Harga</th>
              <th>Jenis_Paket</th>
              <th>Fasilitas</th>
              <th>Foto</th>
              <th>Actions</th>
            </tr> 
        </thead> 
              @foreach($paket as $p)
            <tr>
              <td>{{ $p->id_paket }}</td>
              <td>{{ $p->name }}</td>
              <td>{{ $p->durasi }}</td>
              <td>{{ $p->harga }}</td>
              <td>{{ $p->jenis_paket }}</td>
              <td>{{ $p->fasilitas }}</td>
               <td><img width="150px" src="{{ url('/uploads/file/'.$p->file) }}"></td>           
              <td><a class='badge badge-primary' href="/paket/editpaket/{{ $p->id_paket }}"> Edit</a>
                  <a class='badge badge-danger' href="/paket/destroy/{{ $p->id_paket }}"> Hapus</a>
              </td>   
            </tr>
              @endforeach
          </table>
        </br>
          <a href="/paket/tambahpaket"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Daftar Paket Baru</a>
  </div>
 </div>
@stop    