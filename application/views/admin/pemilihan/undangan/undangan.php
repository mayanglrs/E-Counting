<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  	<style>
  	.panel {box-shadow: 0 2px 0 rgba(0,0,0,0.05);border-radius: 0;border: 0;margin-bottom: 24px;}.panel-dark.panel-colorful {background-color: #3b4146;border-color: #3b4146;color: #fff;}.panel-danger.panel-colorful {background-color: #f76c51;border-color: #f76c51;color: #fff;}.panel-primary.panel-colorful {background-color: #5fa2dd;border-color: #5fa2dd;color: #fff;}.panel-info.panel-colorful {background-color: #4ebcda;border-color: #4ebcda;color: #fff;}.padding: 25px 20px;}.panel hr {border-color: rgba(0,0,0,0.1);}.mar-btm {margin-bottom: 15px;}h2, .h2 {font-size: 28px;}.small, small {font-size: 85%;}.text-sm {font-size: .9em;}.text-thin {font-weight: 300;}.text-semibold {font-weight: 600;}}
	</style>
	
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
					        			<a href="#" style="color:white;"><p class="text-uppercase mar-btm text-sm">Buat Undangan</p>
					        			<i class="fa fa-envelope fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">Auto All</p>
					        			<small>Buat undangan untuk keseluruhan DPT</small></a>
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-info panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="<?php echo base_url('pemilihan/sub_undangan/').$data_pemilihan['id_pm'] ?>" style="color:white;"><p class="text-uppercase mar-btm text-sm">Sub Undangan</p>
					        			<i class="fa fa-users fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">Manual</p>
					        			<small>Buat undangan untuk masing-masing DPT</small></a>
					        		</div>
					        	</div>
					        </div>
					        <div class="col-md-3 col-sm-6 col-xs-12">
					        	<div class="panel panel-danger panel-colorful" style="padding:20px;">
					        		<div class="panel-body text-center">
					        			<a href="<?php echo base_url('pesan/detail/').$data_pemilihan['id_pm'] ?>" style="color:white;"><p class="text-uppercase mar-btm text-sm">Sub Undangan</p>
					        			<i class="fa fa-envelope fa-5x"></i>
					        			<hr>
					        			<p class="h2 text-thin">SMS</p>
					        			<small>Kirim SMS kepada pada masing-masing DPT</small></a>
					        		</div>
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
	   

	</body>
</html>