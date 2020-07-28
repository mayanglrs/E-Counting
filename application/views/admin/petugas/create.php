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
		    	
		    <?php echo $this->session->flashdata('failed'); ?>

		    <div class="card" style="padding:20px;">
		        <div class="card-body">
		          <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Tambah Data Petugas</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form action="<?=base_url('petugas/input_petugas')?>" method="post" enctype="multipart/form-data"role="form">
	                <div class="card-body">
	                 			<div class="form-group">
				                    <label for="nama">Nama</label>
				                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukkan Nama Lengkap">
				                  </div>
				                 
				                  <div class="form-group">
				                    <label for="jk">Jenis Kelamin</label>
				                    <select class="form-control" name="jenis_kelamin">
				                      <option value="L">Laki-Laki</option>
				                      <option value="P">Perempuan</option>
				                    </select>
				                  </div>
				                  <div class="form-group">
				                    <label for="alamat">Alamat</label>
				                     <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" name="alamat"></textarea>
				                  </div>
				                  <div class="form-group">
				                    <label for="job">Bagian Petugas</label>
				                    <select class="form-control" name="job">
				                      <option value=""></option>
				                      <option value="ketua">Ketua</option>
				                      <option value="pengantar">Pengantar Surat</option>
				                      <option value="dll">Dll</option>
				                    </select>
				                  </div>
				                  <div class="form-group">
								    <label for="foto">Upload Foto:</label>
								    <div class="input-group">
									    <div class="custom-file">
									       <input type="file" class="form-control" id="foto" name="foto">
									    </div>
								   </div>
								  </div>
				    </div>

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
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