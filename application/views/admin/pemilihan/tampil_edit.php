//tampil with edit

<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

	<body class="hold-transition sidebar-mini layout-fixed">

			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/navbar.php") ?>
		    <!-- /.sidebar -->
  			<!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->
		  


			<div class="content-wrapper">
				 <section class="content">
				 	<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>
		            <div class="card-body">
		                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		                  <ol class="carousel-indicators">
		                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		                  </ol>
		                  <div class="carousel-inner">
		                    <div class="carousel-item active">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/a3.jpg') ?>" alt="First slide">
		                    </div>
		                    <div class="carousel-item">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/a2.png') ?>" alt="Second slide">
		                    </div>
		                    <div class="carousel-item">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/a4.png') ?>" alt="Third slide">
		                    </div>
		                  </div>
		                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Previous</span>
		                  </a>
		                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                    <span class="sr-only">Next</span>
		                  </a>
		                </div>
		              <!-- /.card-body -->
		              	<br/>

		              	<div class="card">
				            <div class="card-header">
				              <h3 class="card-title">Data Pemilih
				              	<a class="btn btn-primary" href="<?= base_url('pemilihan/tambah'); ?>">Add Data</a></h3>
				            </div>
			              	<div class="content">
			              		<div class="card-deck">
			              		<div class="row" style="padding:18px;">
				             	<?php foreach($data_pemilihan as $pm){ ?>
				              
				            	
					            	<div class="card" style="width: 20rem;">
									  <div class="img"><img class="card-img-top" src="<?php echo base_url('assets/img2/a3.jpg') ?>" alt="Card picture caption"></div>
									  <div class="card-body">
									    <h4 class="card-title"><?php echo $pm->jenis_pm; ?>&nbsp<a href="<?=base_url('pemilihan/edit_pemilihan/').$pm->id_pm;?>" class="btn btn-info"><i class="fa fa-pen"></i></a></h4>
									    <p class="card-text"><?php echo $pm->desk_pm; ?></p>
									     <a href="<?=base_url('pemilihan/detail_pemilihan/').$pm->id_pm;?>" class="btn btn-primary">Detail</a>
										 <a href="<?=base_url('pemilihan/publish/').$pm->id_pm; ?>" class="btn btn-info">Publish</a>
										 <a href="<?=base_url('pemilihan/undangan/').$pm->id_pm;?>" class="btn btn-warning">Undangan</a>
									  </div>
									</div>
								<?php } ?>
								</div>
							  </div>
							 </div>
						</div>
		      		</div>
		      		


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
	    	
	    </script>>


	</body>
</html>