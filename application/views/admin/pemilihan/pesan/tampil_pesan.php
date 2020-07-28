<html lang="en">
<head>
	<?php $this->load->view("layouts/head.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
		  <!-- Navbar -->
		  <?php $this->load->view("layouts/navbar.php") ?>
		  <!-- /.navbar -->

	      <!-- Sidebar Menu -->
	      <?php $this->load->view("layouts/sidebar.php") ?>
	      <!-- /.sidebar -->
	  
		  <!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
		    <br/><br/>

		    <!-- Main content -->
		    <section class="content">

		    		<?php if ($this->session->flashdata('success')): ?>
			      		<div class="alert alert-info" role="alert">
				            <?php echo $this->session->flashdata('success'); ?>
				          </div>
				    <?php endif; ?>
		    	
		    <?php echo $this->session->flashdata('failed'); ?>

		    <div class="card" style="padding:20px;">
		      <div class="card-body">
		        <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Kirim Pesan</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form action="<?=base_url('pesan/sendmsg/').$data_pemilihan['id_pm'];?>" method="post" enctype="multipart/form-data" role="form">
	                <div class="card-body">
	                 <div class="form-group">
	                   	<label for="jenis_pm">Nomor Telepon yang dituju</label>
	                     <select class="form-control select2" style="width: 100%;" name="msisdn">
			              <option selected="selected"></option>
			            <?php foreach($data_no as $pm):?>
			              <option value="<?php echo $pm->no_tlp ?>"><?php echo $pm->no_tlp ?></option>
			            <?php endforeach;?>      
			            </select>
	                  </div>
	                  <div class="form-group">
	                    <label for="alamat">Format Pesan</label>
	                    <textarea class="form-control" id="pesan" name="content" placeholder="Tulis format pesan"></textarea>
	                  </div>
					</div>

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Kirim</button>
	                  <a href="<?=base_url('admin/calon')?>" class="btn btn-default" role="button">Kembali</a>
	                </div>
              	</form>

            		</div>
            <!-- /.card -->
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
</html>