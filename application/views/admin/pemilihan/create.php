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
		    	
		    
		    <div class="card" style="padding:20px;">
		    <?php echo $this->session->flashdata('failed'); ?>
		    
		        <div class="card-body">
		          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pemilihan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <div class="modal-body">
			              <form role="form" action="<?=base_url('pemilihan/input_pemilihan')?>" method="post" enctype="multipart/form-data">
			                <div class="card-body">
			                  <div class="form-group">
			                  <label for="nik">Jenis Pemilihan</label>
			                  <input type="text" class="form-control" id="jenis_pm" name="jenis_pm" placeholder="">
			                  </div>
			                  <div class="form-group">
			                  <label for="nik">Deskripsi Pemilihan</label>
			                  <textarea name="desk_pm" class="form-control"></textarea>
			                  </div>
			                  <div class="form-group">
			                    <label for="nama">Tanggal</label>
			                    <input type="date" class="form-control" id="tanggal_pm" name="tanggal_pm">
			                  </div>
			                  <div class="form-group">
			                    <label for="tgl_lahir">Lokasi</label>
			                    <select class="form-control select2" style="width: 100%;" name="lokasi_pm">
					               <option value="<?php echo $data_admin->kota ?>" selected="selected"><?php echo $data_admin->kota ?></option>
					            <?php foreach($data_kota as $kota):?>
					              <option value="<?php echo $kota->id_kota ?>"><?php echo $kota->nama ?></option>
					            <?php endforeach;?>      
					            </select>
			                  </div>
			                  <div class="form-group">
			                    <label for="tps_pm">No TPS</label>
			                    <input type="text" class="form-control" id="tps_pm" value="<?php echo $data_admin->no_tps ?>" name="tps_pm" placeholder="">
			                  </div>
			                   <div class="form-group">
			                    <label for="desa_pm">Desa/Kelurahan</label>
			                    <input type="text" class="form-control" id="tps_pm" value="<?php echo $data_admin->desa ?>" name="desa_pm" placeholder="">
			                  </div>
			                  <div class="form-group">
			                    <label for="dpt_pm">Jumlah DPT</label>
			                    <input type="type" class="form-control" name="dpt_pm" id="dpt_pm">
			                  </div>
			                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?=base_url('pemilihan')?>" class="btn btn-default" role="button">Kembali</a>
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