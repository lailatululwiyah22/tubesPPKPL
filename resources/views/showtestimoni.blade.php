@extends('layouts.template')

@section('title', 'Testimoni')

@section('content')
<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Testimoni</span></p>
	            <h1 class="bread">Testimoni Travel</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    		    <!-- Page section--> 
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin: auto;width: 100%">
								<h2 class="ppb_tittle" style>
									<span>Testimoni Jamaah</span>
								</h2>
								<div class="page-tagline" style>
									<p>Apa kata jamaah tentang kami</p>
								</div> 	
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
                		<table class="table table-bordered table-striped table-hover table-condensed tfix">
                    		<thead align="center">
                       			<tr>
		                           <td><b>Foto</b></td>
		                           <td><b>Keterangan</b></td>
		                           <td><b>Nama</b></td>
		                           <td><b>Pekerjaan</b></td>
                       			</tr>
                   			</thead>
							   
                  			 @foreach($testimoni as $m)
                       			<tr>
		                           <td><img width="150px" src="{{ url('/uploads/file/'.$m->file) }}"></td>
		                           <td>{{ $m->keterangan }}</td>
		                           <td>{{ $m->nama }}</td>
		                           <td>{{ $m->pekerjaan }}</td>
                       			</tr>
                   			@endforeach
              			</table>
          			</div>	
	    	</section>
	  @stop