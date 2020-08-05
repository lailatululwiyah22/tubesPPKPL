@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
    <h2>Data Invoice</h2>
      @if($datas->count())
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
         <thead align="center">
          <tr>
            <td><b>Id_Pemesanan</b></td>
            <td><b>Jumlah_Pesan</b></td>
            <td><b>Id_Paket</b></td>
            <td><b>Id_Pengguna</b></td>
            <td><b>No_Telp</b></td>
            <td><b>status</b></td>
            <td><b>Actions</b></td>
          </tr>
        </thead>
          @foreach($datas as $m)
          <tr>
          
            <td>{{ $m->id_pemesanan }}</td>
            <td>{{ $m->jml_pesan}}</td>
            <td>{{ $m->id_paket }}</td>
            <td>{{ $m->id_pengguna }}</td>
            <td>{{ $m->no_telp }}</td>
            <td>{{ $m->status }}</td>
            <td align="center" width="30px">
              <a href="/pemesanan/editpesan/{{ $m->id_pemesanan }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
           
              <!--<a href="/pemesanan/destroy/{{ $m->id_pemesanan }}"class="btn btn-danger btn-sm">Hapus</a></td>-->
          </tr>
          @endforeach
        </table>
      </div>
      @else
       <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i> Data Invoice tidak tersedia
       </div>
      @endif
      <br>
    <a href="/pemesanan/tambahpesan" class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Invoice Baru</a>
</div>
</div>
@stop