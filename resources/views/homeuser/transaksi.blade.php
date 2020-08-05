@extends('homeuser.template')

@section('title', 'Transfer')
@section('content')


<!-- Begin Page Content -->
<!-- DataTable with Hover -->
     </br>
      </br>
      </br>
      <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
                <li> {{Session::get('username')}}</li> 
              </div>
            </div>
          </div>
           <h4><strong>Bukti Transfer</strong></h4>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                      <th>Username</th>
                      <th>Paket</th>
                      <th>Status</th>
                      <th>Bukti Transfer</th>
                      <th>Tanggal Transfer</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->username }}</td>
                               
                                    <td>{{ $data->id_paket }}</td>
                               
                                    <td>{{ $data->status }}</td>
                                   
                                     <td><img src="{{ url('uploads/file/'.$data->file) }}" style="width: 100px; height: 150px;"> </td>
                                      <td>{{ $data->created_at }}</td>

                                    
                                    
                     

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
        </section>
      </div>
    <!--Row-->

          <!-- DataTales Example -->
                 
    

          

          <!-- DataTales Example -->
          @endsection