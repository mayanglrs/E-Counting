<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  	<style>
  	.sizeimg{
  		width:270px;
  	}
	</style>
</head>

	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/navbar.php") ?>
		    <!-- /.sidebar -->
  			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->

		  
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				  <!-- Content Header (Page header) -->
			    <?php $this->load->view("layouts/breadcrumb.php") ?>
			    <!-- /.content-header -->

			    <!-- Main content -->
			    <section class="content">
			    	<div class="container bootstrap snippet">
					    <div class="row">
					        <div class="col-md-3 col-sm-6 col-xs-12">
					            <div class="panel panel-dark panel-colorful">
					                <div class="panel-body text-center">
					                	<a href="#" style="color:black;"  onclick="myFunction1()"><p class="text-uppercase mar-btm text-sm">Daftar Calon</p>
					                	<i class="fa fa-user fa-5x"></i>
					                	<hr>
					                	<p class="h2 text-thin">254,487</p>
					                	<small><span class="text-semibold">7%</span> Total Calon Pemilih</small></a>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-danger panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction2()"><p class="text-uppercase mar-btm text-sm">Daftar Pemilih</p>
					        			<i class="fa fa-users fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">873</p>
					        			<small><span class="text-semibold">154</span> Total Daftar Pemilih Tetap</small></a>
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-primary panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;" onclick="myFunction3()"><p class="text-uppercase mar-btm text-sm">Grafik Pemilihan</p>
					        			<i class="fa fa-edit fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">2,423</p>
					        			<small><span class="text-semibold">954%</span>Total Perolehan suara</small></a>
					        			<!-- Default box -->
									    
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction4()"><p class="text-uppercase mar-btm text-sm">Data Pemilihan</p>
					        			<i class="fa fa-tasks fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">7,428</p>
					        			<small><span class="text-semibold"></span>Keterangan</small></a>
					        		</div>
					        	</div>
					        </div>     
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction4()"><p class="text-uppercase mar-btm text-sm">Lokasi</p>
					        			<i class="fa fa-location-arrow fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">7,428</p>
					        			<small><span class="text-semibold"></span>Keterangan</small></a>
					        		</div>
					        	</div>
					        </div>        
						</div>
					</div><br/><br/>

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
		             <?php foreach($data_calon->result_array() as $row){ ?>
						<div class="card-deck">
					          <div class="row">

					            <!-- Profile Image -->
					            <div class="card card-primary card-outline" style="width:15rem;">
					              <div class="card-body box-profile">
					                <div class="text-center">
					                  <img class="profile-user-img img-fluid img-circle"
					                       src="<?php echo base_url('assets/img/').$row['foto']; ?>"
					                       alt="User profile picture">
					                </div>

					                <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

					                <p class="text-muted text-center">Software Engineer</p>

					                <ul class="list-group list-group-unbordered mb-3">
					                  <li class="list-group-item">
					                    <b>Alamat</b> <a class="float-right"><?php echo $row['alamat']; ?></a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Following</b> <a class="float-right">543</a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Friends</b> <a class="float-right">13,287</a>
					                  </li>
					                </ul>
					              </div>&nbsp&nbsp
					              <!-- /.card-body -->
					            <!-- /.card -->
					       </div>
					   </div>

				<?php } ?>
		        </div>
		        <!-- /.card-body -->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV2" style="display:none;">
		        <div class="card-header bg-gradient-success">
		          <h3 class="card-title">DAFTAR PEMILIH TETAP</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV3" style="display:none;">
		        <div class="card-header bg-gradient-warning">
		          <h3 class="card-title">GRAFIK PEMILIHAN</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV4" style="display:none;">
		        <div class="card-header bg-gradient-danger">
		          <h3 class="card-title">LOKASI</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
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
		</div>
		<!-- ./wrapper -->

	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->
	    <script type="text/javascript">
	    	function myFunction1() {
			  var x = document.getElementById("myDIV1");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction2() {
			  var x = document.getElementById("myDIV2");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction3() {
			  var x = document.getElementById("myDIV3");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction4() {
			  var x = document.getElementById("myDIV4");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}
	    </script>

	</body>
</html><html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  	<style>
  	.sizeimg{
  		width:270px;
  	}
	</style>
</head>

	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/navbar.php") ?>
		    <!-- /.sidebar -->
  			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->

		  
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				  <!-- Content Header (Page header) -->
			    <?php $this->load->view("layouts/breadcrumb.php") ?>
			    <!-- /.content-header -->

			    <!-- Main content -->
			    <section class="content">
			    	<div class="container bootstrap snippet">
					    <div class="row">
					        <div class="col-md-3 col-sm-6 col-xs-12">
					            <div class="panel panel-dark panel-colorful">
					                <div class="panel-body text-center">
					                	<a href="#" style="color:black;"  onclick="myFunction1()"><p class="text-uppercase mar-btm text-sm">Daftar Calon</p>
					                	<i class="fa fa-user fa-5x"></i>
					                	<hr>
					                	<p class="h2 text-thin">254,487</p>
					                	<small><span class="text-semibold">7%</span> Total Calon Pemilih</small></a>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-danger panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction2()"><p class="text-uppercase mar-btm text-sm">Daftar Pemilih</p>
					        			<i class="fa fa-users fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">873</p>
					        			<small><span class="text-semibold">154</span> Total Daftar Pemilih Tetap</small></a>
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-primary panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;" onclick="myFunction3()"><p class="text-uppercase mar-btm text-sm">Grafik Pemilihan</p>
					        			<i class="fa fa-edit fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">2,423</p>
					        			<small><span class="text-semibold">954%</span>Total Perolehan suara</small></a>
					        			<!-- Default box -->
									    
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction4()"><p class="text-uppercase mar-btm text-sm">Data Pemilihan</p>
					        			<i class="fa fa-tasks fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">7,428</p>
					        			<small><span class="text-semibold"></span>Keterangan</small></a>
					        		</div>
					        	</div>
					        </div>     
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful">
					        		<div class="panel-body text-center">
					        			<a href="#" style="color:black;"  onclick="myFunction4()"><p class="text-uppercase mar-btm text-sm">Lokasi</p>
					        			<i class="fa fa-location-arrow fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">7,428</p>
					        			<small><span class="text-semibold"></span>Keterangan</small></a>
					        		</div>
					        	</div>
					        </div>        
						</div>
					</div><br/><br/>

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
		             <?php foreach($data_calon->result_array() as $row){ ?>
						<div class="card-deck">
					          <div class="row">

					            <!-- Profile Image -->
					            <div class="card card-primary card-outline" style="width:15rem;">
					              <div class="card-body box-profile">
					                <div class="text-center">
					                  <img class="profile-user-img img-fluid img-circle"
					                       src="<?php echo base_url('assets/img/').$row['foto']; ?>"
					                       alt="User profile picture">
					                </div>

					                <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

					                <p class="text-muted text-center">Software Engineer</p>

					                <ul class="list-group list-group-unbordered mb-3">
					                  <li class="list-group-item">
					                    <b>Alamat</b> <a class="float-right"><?php echo $row['alamat']; ?></a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Following</b> <a class="float-right">543</a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Friends</b> <a class="float-right">13,287</a>
					                  </li>
					                </ul>
					              </div>&nbsp&nbsp
					              <!-- /.card-body -->
					            <!-- /.card -->
					       </div>
					   </div>

				<?php } ?>
		        </div>
		        <!-- /.card-body -->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV2" style="display:none;">
		        <div class="card-header bg-gradient-success">
		          <h3 class="card-title">DAFTAR PEMILIH TETAP</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV3" style="display:none;">
		        <div class="card-header bg-gradient-warning">
		          <h3 class="card-title">GRAFIK PEMILIHAN</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
		      </div>
		      <!-- /.card -->

		      <!-- Default box -->
		      <div class="card" id="myDIV4" style="display:none;">
		        <div class="card-header bg-gradient-danger">
		          <h3 class="card-title">LOKASI</h3>

		          <div class="card-tools">
		            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
		              <i class="fas fa-minus"></i></button>
		            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		              <i class="fas fa-times"></i></button>
		          </div>
		        </div>
		        <div class="card-body">
		          Start creating your amazing application!
		        </div>
		        <!-- /.card-body -->
		        <div class="card-footer">
		          Footer
		        </div>
		        <!-- /.card-footer-->
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
		</div>
		<!-- ./wrapper -->

	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->
	    <script type="text/javascript">
	    	function myFunction1() {
			  var x = document.getElementById("myDIV1");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction2() {
			  var x = document.getElementById("myDIV2");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction3() {
			  var x = document.getElementById("myDIV3");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}

			function myFunction4() {
			  var x = document.getElementById("myDIV4");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
			}
	    </script>

	</body>
</html>