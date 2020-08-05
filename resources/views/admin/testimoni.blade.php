@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
    <h2>Data Testimoni</h2>
      @if($testimoni->count())
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
         <thead align="center">
          <tr>
            <td><b>Id Testimoni</b></td>
            <td><b>Foto</b></td>
            <td><b>Keterangan</b></td>
            <td><b>Nama</b></td>
            <td><b>Pekerjaan</b></td>
            <td colspan="2"><b>Actions</b></td>
          </tr>
        </thead>
          @foreach($testimoni as $m)
          <tr>
            <td>{{ $m->id_testimoni }}</td>
            <td><img width="150px" src="{{ url('/uploads/file/'.$m->file) }}"></td>
            <td>{{ $m->keterangan}}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->pekerjaan }}</td>
            <td align="center" width="30px">
              <a href="/testimoni/edittestimoni/{{ $m->id_testimoni }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
            <td align="center" width="30px">
              <a href="/testimoni/destroy/{{ $m->id_testimoni }}"class="btn btn-danger btn-sm">Hapus</a></td>
          </tr>
          @endforeach
        </table>
      </div>
      @else
       <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i> Data Testimoni tidak tersedia
       </div>
      @endif
      <br>
    <a href="/testimoni/tambahtestimoni" class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Testimoni Baru</a>
</div>
</div>
@stop