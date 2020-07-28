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
		    <!-- Content Header (Page header) -->
		     <?php $this->load->view("layouts/breadcrumb.php") ?>
		    <!-- /.content-header -->

		    <!-- Main content -->
		    <section class="content">

		    <div class="card">
		        <div class="card-body">
		          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Calon</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('calon/update_calon/').$data_calon['id'];?>" method="post" enctype="multipart/form-data"role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?=$data_calon['nama'];?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?=$data_calon['tgl_lahir']?>">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" rows="5" id="alamat" name="alamat"><?=$data_calon['alamat'];?></textarea>
                  </div>
                  <div class="form-group">
			        <label for="jk">Jenis Kelamin</label>
			        <select class="form-control" name="jenis_kelamin">
			          <option value="Laki-Laki">Laki-Laki</option>
			          <option value="Perempuan">Perempuan</option>
			        </select>
			      </div>
                  <div class="form-group">
                     <label for="agama">Agama</label>
	                    <select class="form-control" name="agama">
	                      <option value=""></option>
	                      <option value="islam">Islam</option>
	                      <option value="kristen">Kristen</option>
	                      <option value="Katholik">Katholik</option>
	                      <option value="hindu">Hindu</option>
	                      <option value="buddha">Buddha</option>
	                      <option value="lain">Kepercayaan lain</option>
	                    </select>
                  </div>
                  <div class="form-group">
						<label for="foto">Foto:</label>
						<div class="input-group">
							<div class="custom-file">
								  <input type="file" class="form-control" id="foto" name="foto">
							</div>
						</div>
				  </div>
                </div>
                <!-- /.card-body -->

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