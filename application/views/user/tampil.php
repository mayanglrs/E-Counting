<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

	<body class="hold-transition layout-top-nav">
		
			<!-- Navbar -->
			<?php $this->load->view("layouts/top-nav.php") ?>
			<!-- /.navbar -->


	 <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/b-1.jpg') ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/b-2.jpg') ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/b-3.jpg') ?>" alt="Third slide">
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
              </div>
              <!-- /.card-body -->
            </div>
			
			<br/>

			<div class="content">

			    <!-- Main content -->
			    <section class="content">
  					
  					<div class="container">
			        
				 	<?php foreach($data_pemilihan as $pm){ ?>
						<div class="card">
			              <div class="card-header">
			                <h5 class="m-0">Featured</h5>
			              </div>
			              <div class="card-body">
			                <h6 class="card-title"><?php echo $pm->jenis_pm; ?></h6>
			                <p class="card-text"><?php echo $pm->desk_pm; ?></p>
			                 <a href="<?=base_url('pemilihan/detail_pemilihan/').$pm->id_pm;?>" class="btn btn-info">Detail</a>
							 <a href="<?=base_url('pemilihan/publish/').$pm->id_pm; ?>" class="btn btn-default" name="publish">Publish</a>
			              </div>
			            </div>
            		<?php } ?>
        		

			    </section>
			    <!-- /.content -->
			</div>
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