@extends('homeuser.template')

@section('title', 'detail_pesan')

@section('content')
</br>
      </br>
      </br>
      <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
                <li> {{Session::get('username')}}</li> 
              </div>
            </div>
          </div>
          <div>
           <h4><strong>Detail Pemesanan</strong></h4>
           <h5>Upload Bukti Transaksi Ke Rekening : 021345</h5>
            @foreach($amount as $c)
            <p>Total : {{$c->total}}
              @endforeach   

            <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
          <thead align="center">
                    <tr>
                      <th>Username</th>
                      <th>ID Paket</th>
                      <th>ID Pengguna</th>
                      <th>Harga </th>
                      <th>Status</th>
                      <th>Tanggal Pesan</th>   
                    </tr>
                  </thead>
                    @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->id_paket }}</td>
                                    <td>{{ $data->id_pengguna }}</td>
                                   <td>{{ $data->harga }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->created_at }}</td>
                            </tr>
                            
                              @endforeach  
                                 

                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
    </br>
      </br>
      </br>
 
          @endsection