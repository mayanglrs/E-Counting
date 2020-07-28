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
		    	
		    <?php echo $this->session->flashdata('failed'); ?>

		    <div class="card" style="padding:20px;">
		        <div class="card-body">
		          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pemilihan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <div class="modal-body">
			              <form role="form" action="<?=base_url('pemilihan/update_pemilihan/').$data_pemilihan['id_pm'];?>" method="post" enctype="multipart/form-data">
			                <div class="card-body">
			                  <div class="form-group">
			                  <label for="nik">Jenis Pemilihan</label>
			                  <input type="text" class="form-control" id="jenis_pm" name="jenis_pm" value="<?=$data_pemilihan['jenis_pm'];?>">
			                  </div>
			                  <div class="form-group">
			                  <label for="nik">Deskripsi Pemilihan</label>
			                  <textarea name="desk_pm" class="form-control"><?=$data_pemilihan['desk_pm'];?></textarea>
			                  </div>
			                  <div class="form-group">
			                    <label for="nama">Tanggal</label>
			                    <input type="date" class="form-control" id="tanggal_pm" name="tanggal_pm" value="<?=$data_pemilihan['tanggal_pm'];?>">
			                  </div>
			                  <div class="form-group">
			                    <label for="tgl_lahir">Lokasi</label>
			                    <input type="text" class="form-control" name="lokasi_pm" id="lokasi_pm" value="<?=$data_pemilihan['lokasi_pm'];?>">
			                  </div>
			                  <div class="form-group">
			                    <label for="tps_pm">No TPS</label>
			                    <input type="text" class="form-control" id="tps_pm" name="tps_pm" value="<?=$data_pemilihan['tps_pm'];?>">
			                  </div>
			                   <div class="form-group">
			                    <label for="desa_pm">Desa/Kelurahan</label>
			                    <input type="text" class="form-control" id="tps_pm" name="desa_pm" value="<?=$data_pemilihan['desa_pm'];?>">
			                  </div>
			                  <div class="form-group">
			                    <label for="dpt_pm">Jumlah DPT</label>
			                    <input type="type" class="form-control" name="dpt_pm" id="dpt_pm" value="<?=$data_pemilihan['dpt_pm'];?>">
			                  </div>
			                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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