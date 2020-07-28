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
			    	<div class="card">
		            <div class="card-header">
		              <h3 class="card-title">Daftar Kehadiran</h3>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		              		<th>No</th>
		              		<th>NIK</th>
							<th>Nama</th>
							<th>JK</th>
							<th>Tanggal Datang</th>
							<th>Keterangan</th>
		                </thead>
		                <tbody>
			               <?php 
							$no = 1;
							foreach($data_absen as $absen){ 

							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $absen->nik; ?></td>
								<td><?php echo $absen->nama; ?></td>
								<td><?php echo $absen->jenis_kelamin ?></td>
								<td><?php echo $absen->tanggal ?></td>
								<td> <div class="form-group clearfix"><div class="icheck-success d-inline"><input type="checkbox" checked><label>Datang</label></div></div></td>
							</tr>
							<?php } ?>
						</tbody>
		              </table>
		            </div>
		            <!-- /.card-body -->
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