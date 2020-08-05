@extends('admin.template')

@section('content')

 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
  </br>
  </br>
  </br>
    <h2>Data Manasik</h2>        
      @if(count($manasik))
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead align="center">
              <tr>
                <td><b>id</b></td>
                <td><b>Nama Manasik</b></td>
                <td><b>ID Muthowwif</b></td>
                <td><b>Tanggal</b></td>
                <td><b>Tempat</b></td>
                <td><b>Waktu</b></td>
                <td colspan="2"><b>Actions</b></td>
              </tr>
            </thead>
              @foreach($manasik as $m)
              <tr>
                <td>{{ $m->id_manasik }}</td>
                <td>{{ $m->nama_manasik }}</td>
                <td>{{ $m->id_muthowwif }}</td>
                <td>{{ $m->tanggal }}</td>
                <td>{{ $m->tempat }}</td>
                <td>{{ $m->waktu }}</td>
                <td align="center" width="30px">
                  <a href="/manasik/editmanasik/{{$m->id_manasik}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                </td>
                <td align="center" width="30px">
                  <a href="/muthowwif/destroy/{{ $m->id_manasik }}" class="btn btn-danger btn-sm" role="button"><i class="fa fa-pencil-square"></i> hapus</a>
                </td>
              </tr>
              @endforeach
          </table>
          </div>
        @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Data Manasik tidak tersedia
            </div>
        @endif
    <a href="/manasik/tambahmanasik"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Manasik Baru</a>  
  </div>
</div>
@stop