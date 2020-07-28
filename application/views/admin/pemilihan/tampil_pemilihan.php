<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Navbar -->
			<?php $this->load->view("layouts/navbar.php") ?>
			<!-- /.navbar -->


		    <!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->
		  
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

			    <!-- Main content -->
			    <section class="content">

					<div class="card">
		            <div class="card-header">
		              <h3 class="card-title">Data Pemilihan
		              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Add Data
                	  </button></h3>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		              		<th>No</th>
		              		<th>Jenis Pemilihan</th>
							<th>Tanggal</th>
							<th>Lokasi</th>
							<th>No TPS</th>
							<th>Desa/Kelurahan</th>
							<th>Jumlah DPT</th>
							<th>Action</th>
		                </thead>
		                <tbody>
			               <?php 
							$no = 1;
							foreach($data_pemilihan->result_array() as $pm){ 
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $pm['jenis_pm']; ?></td>
								<td><?php echo $pm['tanggal_pm']; ?></td>
								<td><?php echo $pm['lokasi_pm'] ?></td>
								<td><?php echo $pm['tps_pm'] ?></td>
								<td><?php echo $pm['desa_pm'] ?></td>
								<td><?php echo $pm['dpt_pm'] ?></td>
								<td>
									<a href="<?=base_url('admin/edit_pemilihan/').$pm['id_pm'];?>" class="btn btn-sm btn-info">Update</a> 
									<a href="<?=base_url('admin/hapus_pemilihan/').$pm['id_pm'];?>" class="btn btn-sm btn-danger">Delete</a> 
									
								</td>
							</tr>
							<?php } ?>
						</tbody>
		              </table>
		            </div>
		            <!-- /.card-body -->
		          </div>
		          <!-- /.card -->
		          	<?php 
					
					foreach($data_pemilihan->result_array() as $pm){ 
					?>
					<div class="content">
				      <div class="container-fluid">
				        <div class="row">
						<div class="col-lg-6">
				            <div class="card">
				              <div class="card-header">
				                <h5 class="m-0">Featured</h5>
				              </div>
				              <div class="card-body">
				                <h6 class="card-title"><?php echo $pm['jenis_pm']; ?></h6>

				                <p class="card-text"><?php echo $pm['desk_pm']; ?></p>
				                <a href="<?=base_url('admin//').$pm['id_pm'];?>" class="btn btn-info">Detail</a>
				                <a href="<?=base_url('admin/publish/').$pm['id_pm']; ?>" class="btn btn-default" name="publish">Publish</a>
				              </div>
				            </div>
				        </div>
				       </div>
				     </div>

			        <?php } ?>

			        

		          <!-- /.card -->
	          	<div class="modal fade" id="modal-default">
			        <div class="modal-dialog modal-default">
			          <div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Tambah Data Pemilihan</h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <div class="modal-body">
			              <form role="form" action="<?=base_url('admin/input_pemilihan')?>" method="post" enctype="multipart/form-data">
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
			                    <input type="text" class="form-control" name="lokasi_pm" id="lokasi_pm">
			                  </div>
			                  <div class="form-group">
			                    <label for="tps_pm">No TPS</label>
			                    <input type="text" class="form-control" id="tps_pm" name="tps_pm" placeholder="">
			                  </div>
			                   <div class="form-group">
			                    <label for="desa_pm">Desa/Kelurahan</label>
			                    <input type="text" class="form-control" id="tps_pm" name="desa_pm" placeholder="">
			                  </div>
			                  <div class="form-group">
			                    <label for="dpt_pm">Jumlah DPT</label>
			                    <input type="type" class="form-control" name="dpt_pm" id="dpt_pm">
			                  </div>
			                 
			                <!-- /.card-body -->
				            <div class="modal-footer justify-content-between">
				              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				              <button type="submit" class="btn btn-primary">Save data</button>
				            </div>
			     		 </form>
			     		</div>
			     		</div>
			          <!-- /.modal-content -->
			        </div>
			        <!-- /.modal-dialog -->
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
		</div>
		<!-- ./wrapper -->

	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->

	</body>
</html>