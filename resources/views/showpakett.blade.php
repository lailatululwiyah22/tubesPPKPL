@extends('layouts.template')

@section('title', 'Paket Haji & Umroh')

@section('content')
<div id="colorlib-main">
      <section class="ftco-section ftco-bread">
        <div class="container">
          <div class="row no-gutters slider-text justify-content-center align-items-center">
            <div class="col-md-8 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Paket</span></p>
              <h1 class="bread">Daftar Paket Haji dan Umroh</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="ftco-section">
          <div class="container" style="margin-top:20px">
              <h2>Paket Haji dan Umroh</h2>
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-condensed tfix">
       
           <thead align="center">
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
      </div>
    </section>
  </br>
</br>
	  @stop