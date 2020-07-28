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
                <h3 class="card-title">Tambah Data Pemilih</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <div class="modal-body">
			              <form role="form" action="<?=base_url('pemilih/input_user')?>" method="post" enctype="multipart/form-data">
			                <div class="card-body">
			                  <div class="form-group">
			                  <label for="nik">NIK</label>
			                  <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
			                  </div>
			                  <div class="form-group">
			                    <label for="nama">Nama</label>
			                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
			                  </div>
			                   
			                  <div class="form-group">
			                    <label for="tgl_lahir">Tanggal Lahir</label>
			                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
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
			                    <label for="tgl_lahir">No Telepon</label>
			                    <input type="text" class="form-control" name="no_tlp" id="tgl_lahir">
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
			                    <label for="agama">Status Pemilih</label>
			                    <select class="form-control" name="status">
			                      <option value=""></option>
			                      <option value="DPT">DPT</option>
			                      <option value="DPTb">DPTb</option>
			                      <option value="DPK">DPK</option>
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

	</body>
</html>
</html>