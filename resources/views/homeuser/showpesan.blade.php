@extends('homeuser.template')

@section('title', 'Paket Haji & Umroh')
 
@section('content')

    </br>
    </br>
    </br>
    <div id="colorlib-main">
      <section class="ftco-section-no-padding bg-light">
      
      <div class="container" style="margin-top:20px">
        <h2>Data Paket Haji dan Umroh</h2>   
          <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
            <thead class="thead-dark">
              <table border="1">
                <tr> 
                  <th>Nama Paket</th>
                  <th>Durasi Hari</th>
                  <th>Harga</th>
                  <th>Jenis_Paket</th>
                  <th>Fasilsitas</th>
                  <th>Foto</th>
                  
                </tr>      
            </thead> 
              @foreach($paket as $sh)
              <tr>
                  <td>{{ $sh->name }}</td>
                  <td>{{ $sh->durasi }}</td>
                  <td>{{ $sh->harga }}</td>
                  <td>{{ $sh->jenis_paket }}</td>
                  <td>{{ $sh->fasilitas }}</td>
                  <td><img width="150px" src="{{ url('/uploads/file/'.$sh->file) }}"></td>

                  
                 
              </tr>
              @endforeach
          </table>

           <a class="nav-link" href="/homeuser/tambahpesan/">Pesan</a> 
      </div>
    </section>
  </br>
</br>
	  @stop