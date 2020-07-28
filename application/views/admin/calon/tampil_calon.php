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
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>
					<?php echo $this->session->flashdata('failed'); ?>
				<div class="card">
		            <div class="card-header">
		              <h3 class="card-title">Data Calon Pemilihan
		               <a class="btn btn-primary" href="<?= base_url('calon/tambah'); ?>">Add Data</a></h3>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  	<th>No</th>
		                  	<th>No Urut Pencalonan</th>
							<th>Calon</th>
							<th>Nama</th>
							<th>Foto</th>
							<th>Action</th>
		                </tr>
		                </thead>
		                <tbody>
		                <?php 
						$no = 1;
						foreach($data_calon as $calon){ 
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $calon->no_urut; ?></td>
							<td><?php echo $calon->sbg_calon ?></td>
							<td><?php echo $calon->nama ?></td>
							<td><img src="<?php echo base_url('assets/img/').$calon->foto; ?>" style="width:200px;"></td>
							<td>
								<a href="<?=base_url('calon/edit_calon/').$calon->id;?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i>Update</a>
								<a onclick="deleteConfirm('<?=base_url('calon/hapus_calon/').$calon->id;?>')" class="btn btn-sm btn-danger" style="color:#fff;cursor: pointer;" data-toggle="modal" data-target="#modal_hapus<?php echo $calon->id;?>"><i class="fas fa-trash"></i> Hapus</a>
							</td>
						</tr>
						<?php } ?>
		                 </tbody>
		                
		              </table>
		            </div>
		            <!-- /.card-body -->
	          	</div>

		         <?php foreach($data_calon as $calon){ ?>		
		         <form action="<?=base_url('calon/hapus_calon/').$calon->id;?>" method="post">
				 <div class="modal fade" id="modal_hapus<?php echo $calon->id;?>">
			        <div class="modal-dialog modal-sm">
			          <div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Konfirmasi Pilihan</h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <div class="modal-body">
			              <p>Yakin Menghapus <b><?php echo $calon->nama ?></b> ?</p>
			            </div>
			            <div class="modal-footer justify-content-between">
			              <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
			              <button type="submit" class="btn btn-primary">YA!</button>
			            </div>
			          </div>
			          <!-- /.modal-content -->
			        </div>
			        <!-- /.modal-dialog -->
			      </div>
			      <!-- /.modal -->
				</form>
				<?php } ?>
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