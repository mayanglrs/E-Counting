<html>
<head>
	<?php $this->load->view("layouts/head.php") ?>
	<style type="text/css">
		.jarak{
			padding:50px;
		}
		.gede{
			font-size:40px;
		}
	</style>
</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper jarak">

		<section class="content-wrapper">
		<?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		                  <ol class="carousel-indicators">
		                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		                  </ol>
		                  <div class="carousel-inner">
		                    <div class="carousel-item active">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/fin-2.jpg') ?>" alt="First slide">
		                    </div>
		                    <div class="carousel-item">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/fin-4.jpg') ?>" alt="Second slide">
		                    </div>
		                    <div class="carousel-item">
		                      <img class="d-block w-100" src="<?php echo base_url('assets/img2/fin-3.jpg') ?>" alt="Third slide">
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

		    <!-- /.card -->

		   <a class="btn btn-primary" href="<?php echo base_url('user') ?>"><< Kembali</a>
		</section>



   		<!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->

	   	</div>

	</body>
</html>
