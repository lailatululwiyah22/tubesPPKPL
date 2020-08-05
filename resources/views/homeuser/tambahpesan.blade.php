<!DOCTYPE html>
<html>
<head>
  <title>Tambah Invoice</title>
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
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<!--===============================================================================================-->



         <div class="card" align="center">
            <div class="card-header">
                <h3>Pemesanan</h3>   
         </div>
            <div class="card-body">
            <form method="POST" action="{{url('/homeuser/tambahpesan/proses') }}" enctype="multipart/form-data">
              @csrf



                <div class="form-group row">

                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-5">
                       
                    <label for="username" class="col-sm-2 col-form-label">{{Session::get('username')}}</label>
                  
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="id_pengguna" class="col-sm-2 col-form-label">ID Penguna</label>
                    <div class="col-sm-5">
                        @foreach($data as $c2)
                    <input type="text" name="id_pengguna" class="form-control" value="{{$c2->id_pengguna}}" id="id_pengguna" required="" readonly>
                    @endforeach
                    </div>
                </div>
                 <label for="id_paket" class="col-sm-2 col-form-label">ID Paket</label>
                    <div class="col-sm-5">
                      <select name="id_paket" id="id_paket" class="form-control" required="" readonly>
                <option value="">== Pilih Paket ==</option>
                @foreach ($paket as $c1)
                    <option value="{{ $c1->id_paket }}">{{ $c1->id_paket }}</option>
                @endforeach
                 </select>
                </div>
    
                <div class="form-group row">
                    <label for=" jml_pesan" class="col-sm-2 col-form-label">Jumlah Pesan</label>
                    <div class="col-sm-5">
                    <input type="text" name=" jml_pesan" max="12" min="1" class="form-control" id=" jml_pesan" required="" value="1" readonly="">
                    </div>
                
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-5">
                        @foreach($paket as $c1)
                    <input type="text" name="harga" class="form-control" value="{{$c1->harga}}" id="harga" required="" readonly>
                    @endforeach
                    </div>
                </div>


                             </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">No_Telp</label>
                    <div class="col-sm-5">
                    <input type="text" name="no_telp" class="form-control" id="no_telp" required="">
                    </div>
                </div>
                  
   
                    <div class="col-sm-5">
                    <input type="hidden" name="status" class="form-control" id="status" required="" value="Proses Pesan" readonly>
                    </div>
                </div>

                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
               
            </form>
            </div>
        </div>
   
       