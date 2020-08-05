<!-- Begin Page Content -->
<!-- DataTable with Hover -->
    @extends('admin.template')

@section('content') 

     <div class="card shadow mb-4">
           
            <div class="card-header">
                       <strong>Detail Transfer</strong>
                          
                    </div>
                    @if(session('status'))
                      <div class="alert alert-success">
                          {{session('status')}}
                      </div>
                    @endif
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Transfer</th>
                      <th>Foto</th>
                      <th>ID Pemesanan</th>
                      <th>ID Paket</th>
                      <th>ID Pengguna</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $data->id_transaksi }}</td>
                                    <td><img src="{{ url('uploads/file/'.$data->file) }}" style="width: 400px; height: 150px;"> </td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->id_pemesanan }}</td>
                                    <td>{{ $data->id_paket }}</td> 
                                     
                                      <td>{{ $data->created_at }}</td>

                                       <td>
                                    <div class="btn-group dropdown">

                                     

                                      <a class='badge badge-primary' href="transaksi/edittransaksi/{{ $data->id_transaksi }}"> Edit</a>
                                      <!--<a class='badge badge-danger' href="/paket/destroy/{{ $data->id_transaksi }}"> Hapus</a>-->
                                      

                                    
                                     

                                        
                                           
                                

                                        </form>
                                    </div>
                                </td>
                            </tr>
                            
                              @endforeach  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    <!--Row-->

          <!-- DataTales Example -->
                 
    

          

          <!-- DataTales Example -->
          @endsection