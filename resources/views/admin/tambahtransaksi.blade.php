<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
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

    <h2><a href="/pemesanan">Lihat Data Invoice</a></h2>
    <h3>Data Invoice</h3>

    @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
    <form action="/transaksi/proses" method="POST" enctype="multipart/form-data">

<!-- Begin Page Content -->
<!-- DataTable with Hover -->
        <!-- Content Row -->
         <div class="card" >
            <div class="card-header" >
                <h3><strong>Upload Bukti Transfer</strong></h3>
                <p>Transfer Ke No Rek : 0987876</p>
            </div>

              @csrf

                <div class="form-group row">
                    <label for="id_pengguna" class="col-sm-2 col-form-label">ID Pengguna</label>
                    <div class="col-sm-5">
                  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_paket" class="col-sm-2 col-form-label">ID Paket</label>

                    <div class="col-sm-5">
                        @foreach($datas as $c2)
                    <input type="text" name="id_pengguna" class="form-control" value="{{$c2->id_pengguna}}" id="id_pengguna" required="" readonly>
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
                    <label for="gambar_transaksi" class="col-sm-2 col-form-label">Upload Bukti Transfer</label>
                    <div class="col-sm-5">
                    <input type="file" name="gambar_transaksi" class="form-control" id="gambar_transaksi" required="">
                    </div>
                </div>


                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Add">
                    </div>
               
            </form>
            </div>
        </div>
   @endsection
    <!--Row-->

          <!-- DataTales Example -->
                 
    

          

          <!-- DataTales Example -->