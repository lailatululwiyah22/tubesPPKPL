@extends('homeuser.template')

@section('title', 'Transfer')
@section('content')

<!-- Begin Page Content -->
<!-- DataTable with Hover -->
        <!-- Content Row -->

<!--===============================================================================================-->
         <div class="card" >
            <div class="card-header" >
                <h3><strong>Upload Bukti Transfer</strong></h3>
                <p>Transfer Ke No Rek : 021345</p>
            </div>
            <div class="card-body">
            <form method="POST" action="{{url('/homeuser/tambahtf/proses') }}" enctype="multipart/form-data">
              @csrf

<div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label><br>
                    <div class="col-sm-5">
                       
                    <label for="username" class="col-sm-2 col-form-label">{{Session::get('username')}}</label><br>

                <div class="form-group row">
                    <label for="id_pengguna" class="col-sm-2 col-form-label">ID Pengguna</label>
                    <div class="col-sm-5">
                        @foreach($data as $c2)
                    <input type="text" name="id_pengguna" class="form-control" value="{{$c2->id_pengguna}}" id="id_pengguna" required="" readonly>
                    @endforeach
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="id_paket" class="col-sm-2 col-form-label">ID Paket</label>
                    <div class="col-sm-5">
                        @foreach($pms as $c2)
                    <input type="text" name="id_paket" class="form-control" value="{{$c2->id_paket}}" id="id_paket" required="" readonly>
                    @endforeach
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_pemesanan" class="col-sm-2 col-form-label">ID Pemesanan</label>
                    <div class="col-sm-5">
                      <select name="id_pemesanan" id="id_pemesanan" class="form-control">
                <option value="">== Pilih Pesanan ==</option>
                @foreach ($pms as $p)
                    <option value="{{ $p->id_pemesanan }}">{{ $p->id_pemesanan }}</option>
                @endforeach
                 </select>
                 </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">Upload Bukti Transfer</label>
                    <div class="col-sm-5">
                    <input type="file" name="file" class="form-control" id="file" required="">
                    </div>
                </div>

                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
               
            </form>
            </div>
        </div>
   @endsection
    <!--Row-->

          <!-- DataTales Example -->
                 
    

          

          <!-- DataTales Example -->