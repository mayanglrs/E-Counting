<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  	<style>
  	.panel {box-shadow: 0 2px 0 rgba(0,0,0,0.05);border-radius: 0;border: 0;margin-bottom: 24px;}.panel-dark.panel-colorful {background-color: #3b4146;border-color: #3b4146;color: #fff;}.panel-danger.panel-colorful {background-color: #f76c51;border-color: #f76c51;color: #fff;}.panel-primary.panel-colorful {background-color: #5fa2dd;border-color: #5fa2dd;color: #fff;}.panel-info.panel-colorful {background-color: #4ebcda;border-color: #4ebcda;color: #fff;}.padding: 25px 20px;}.panel hr {border-color: rgba(0,0,0,0.1);}.mar-btm {margin-bottom: 15px;}h2, .h2 {font-size: 28px;}.small, small {font-size: 85%;}.text-sm {font-size: .9em;}.text-thin {font-weight: 300;}.text-semibold {font-weight: 600;}}
	
	</style>
	<?php
	 		foreach($grafik as $data){
	            $pilihan[] = $data->pilihan;
	            $jumlah[] = (float) $data->jumlah;
	        }
    ?>
</head>

	<body class="hold-transition sidebar-mini layout-fixed">
			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/navbar.php") ?>
		    <!-- /.sidebar -->
  			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->

		  
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

			    <!-- Main content -->
			    <section class="content"><br/>
			 

			    	<div class="container bootstrap snippet" >
					    <div class="row" >
					    	<div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-primary panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:white;" onclick="myFunction1()"><p class="text-uppercase mar-btm text-sm">Daftar Calon Pemilihan</p>
					        			<i class="fa fa-user fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin"><?php echo $jum1['jumlah'] ?></p>
					        			<small>Total Calon Pemilihan</small></a>
					        		</div>
					        	</div>
					        </div>

					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-dark panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:white;"  onclick="myFunction2()"><p class="text-uppercase mar-btm text-sm">Daftar Pemilih</p>
					        			<i class="fa fa-users fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin"><?php echo $jum2['jumlah'] ?></p>
					        			<small>Total Daftar Pemilih Tetap</small></a>
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-danger panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:white;" onclick="myFunction3()"><p class="text-uppercase mar-btm text-sm">Grafik Pemilihan</p>
					        			<i class="fa fa-edit fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin"><?php echo $jum3['jumlah'] ?></p>
					        			<small>Total Perolehan suara</small></a>
					        			<!-- Default box -->
									    
					        		</div>
					        	</div>
					        </div>  
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:white;"  onclick="myFunction4()"><p class="text-uppercase mar-btm text-sm">Lokasi</p>
					        			<i class="fa fa-location-arrow fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">Info Pemilihan</p>
					        			<small><span class="text-semibold"></span>Keterangan</small></a>
					        		</div>
					        	</div>
					        </div>   
					</div>	

					

		<!-- Default box -->

		      	<div class="card" id="myDIV1" style="display:none;">
		        <div class="card-header bg-gradient-primary">
		          <h3 class="card-title">DAFTAR CALON PEMILIHAN</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		        	 <!-- /.col -->
			          <div class="card-deck">
			          	<div class="row">
			          	<?php foreach($data_calon->result_array() as $row){ ?>
			            <!-- Widget: user widget style 1 -->
			            <div class="card card-widget widget-user" style="width:20rem;">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header bg-info-active">
			                <h3 class="widget-user-username"><?php echo $row['nama']; ?></h3>
			                <h5 class="widget-user-desc" style="text-decoration: uppercase;"><?php echo $row['sbg_calon']; ?></h5>
			              </div>
			              <div class="widget-user-image">
			                <img class="img-circle elevation-2" src="<?php echo base_url('assets/img/').$row['foto']; ?>" style="width:100px" alt="User Avatar">
			              </div>
			              <div class="card-footer">
			                <div class="row">
			                  <br/><br/><br/><br/><br/>
			                </div>
			                <!-- /.row -->
			              </div>
			            </div>
			            <!-- /.widget-user -->
			              <?php } ?>
			          </div>
			          <!-- /.col -->
			      </div>

		        <!-- /.card-body -->
		        </div> 
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV2" style="display:none;">
		        <div class="card-header bg-gradient-dark">
		          <h3 class="card-title">DAFTAR PEMILIH TETAP</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		        	
				<div class="card-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead align="center">
							<th width="10%">No</th>
							<th>Nama</th>
							<th width="10%">JK</th>
							<th>Alamat</th>
							 </thead>
		                <tbody>
		                	<?php $no=1; foreach($data_pemilih->result_array() as $pemilih){ ?>
							<tr>
								
								<td width="10%"  align="center"><?php echo $no++ ?></td>
								<td><?php echo $pemilih['nama']; ?></td>
								<td width="10%"><?php echo $pemilih['jenis_kelamin'] ?></td>
								<td><?php echo $pemilih['alamat'] ?></td>

								
							</tr>
							<?php } ?>
						</tbody>
		              </table>
		            </div>


		        </div>
		        <!-- /.card-body -->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		     		
			          
			        

		      <div class="card" id="myDIV3" style="display:none;">
		      	<?php if ($jumlah < 0){ $belum = $this->session->set_flashdata('belum','Belum ada pemungutan suara!'); ?>
			      	<?php if ($this->session->flashdata('belum')): ?>
			      		<div class="alert alert-warning" role="alert">
				            <?php echo $this->session->flashdata('belum'); ?>
				          </div>
				    <?php endif; ?>
				<?php }else{ ?>   

			        <div class="card-header bg-gradient-danger">
			          <h3 class="card-title">GRAFIK PEMILIHAN</h3>

			          <div class="card-tools">
			            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			              <i class="fas fa-minus"></i></button>
			            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
			              <i class="fas fa-times"></i></button>
			          </div>
			        </div>
			        <div class="card-body">

			            <canvas id="myChart" style="max-width:900px;"></canvas>
			        </div>
		        <?php } ?>
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV4" style="display:none;">
		        <div class="card-header bg-gradient-info">
		          <h3 class="card-title">KETERANGAN LOKASI</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nama Pemilihan</label>
									<div class="col-lg-10">
										<input class="form-control" id="InputEmail1" value="<?=$data_pemilihan['jenis_pm']?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Tanggal Pemilihan</label>
									<div class="col-lg-10">
										<input class="form-control" id="InputEmail1" value="<?=$data_pemilihan['tanggal_pm']?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Lokasi Pemilihan</label>
									<div class="col-lg-10">
										<input class="form-control" id="InputEmail1" value="Desa <?=$data_pemilihan['desa_pm']?>,<?=$data_pemilihan['lokasi_pm']?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">TPS Pemilihan</label>
									<div class="col-lg-10">
										<input class="form-control" id="InputEmail1" value="<?=$data_pemilihan['tps_pm']?>" type="text">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1"  class="col-lg-2 col-sm-2 control-label">DPT Pemilihan</label>
									<div class="col-lg-10">
										<input class="form-control" id="inputPassword1" value="<?=$data_pemilihan['dpt_pm']?>" type="text">
									</div>
								</div>
								
							</form>
						</div>
				</div>
				</div>
		      </div>
		      <!-- /.card -->
					  
			    </section>
			    <!-- /.content -->
 		  </div>
		  <!-- /.content-wrapper -->

		  <!-- Footer -->
		  <?php $this->load->view("layouts/footer.php") ?>
		  <!-- /Footer -->	

		  <!-- Control Sidebar -->
		  <aside class="control-sidebar control-sidebar-dark">
		    <!-- Control sidebar content goes here -->
		  </aside>
		  <!-- /.control-sidebar -->
	
	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->	
	    <script type="text/javascript">


			function myFunction1() {
			  var y = document.getElementById("myDIV1");
			  if (y.style.display === "none") {
			    y.style.display = "block";
			  } else {
			    y.style.display = "none";
			  }
			}
			function myFunction2() {
			  var y = document.getElementById("myDIV2");
			  if (y.style.display === "none") {
			    y.style.display = "block";
			  } else {
			    y.style.display = "none";
			  }
			}

			function myFunction3() {
			  var a = document.getElementById("myDIV3");
			  if (a.style.display === "none") {
			    a.style.display = "block";
			  } else {
			    a.style.display = "none";
			  }
			}

			function myFunction4() {
			  var b = document.getElementById("myDIV4");
			  if ( b.style.display === "none") {
			     b.style.display = "block";
			  } else {
			     b.style.display = "none";
			  }
			}
	    </script>
	    
	    <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
			  type: 'bar',
			  data: {
			    labels: <?php echo json_encode($pilihan);?>,
			    datasets: [{
			      label: '# of Votes',
			      data: <?php echo json_encode($jumlah);?>,
			      backgroundColor: [
			        'rgba(255, 99, 132, 0.2)',
			        'rgba(54, 162, 235, 0.2)',
			        'rgba(255, 206, 86, 0.2)',
			        'rgba(75, 192, 192, 0.2)',
			        'rgba(153, 102, 255, 0.2)',
			        'rgba(255, 159, 64, 0.2)'
			      ],
			      borderColor: [
			        'rgba(255,99,132,1)',
			        'rgba(54, 162, 235, 1)',
			        'rgba(255, 206, 86, 1)',
			        'rgba(75, 192, 192, 1)',
			        'rgba(153, 102, 255, 1)',
			        'rgba(255, 159, 64, 1)'
			      ],
			      borderWidth: 1
			    }]
			  },
			  options: {
			    scales: {
			      yAxes: [{
			        ticks: {
			          beginAtZero: true
			        }
			      }]
			    }
			  }
			});
		</script>


	</body>
</html>