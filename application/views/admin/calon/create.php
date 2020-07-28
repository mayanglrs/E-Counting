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
	                <h3 class="card-title">Tambah Data Calon</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form action="<?=base_url('calon/input_calon') ?>" method="post" enctype="multipart/form-data"role="form">
	                <div class="card-body">
	                 <div class="form-group">
	                    <label for="nama">Nomor Urut</label>
	                    <input type="text" class="form-control" id="no_urut" name="no_urut" placeholder="Nomor Urut dalam Pemilihan">
	                  </div>
	                  <div class="form-group">
	                    <label for="nama">Calon</label>
	                    <input type="text" class="form-control" id="sbg_calon" name="sbg_calon" placeholder="Mencalonkan sebagai..">
	                  </div>
	                  <div class="form-group">
	                    <label for="nama">Nama</label>
	                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
	                  </div>
	                  <div class="form-group">
	                    <label for="alamat">Alamat</label>
	                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap"></textarea>
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
	                   	<label for="jenis_pm">Jenis Pemilihan</label>
	                     <select class="form-control select2" style="width: 100%;" name="pm">
			              <option selected="selected"></option>
			            <?php foreach($data_pm as $pm):?>
			              <option value="<?php echo $pm->id_pm ?>"><?php echo $pm->jenis_pm ?></option>
			            <?php endforeach;?>      
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