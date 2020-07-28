<?php foreach($data_pemilih as $pemilih){ ?>
				<div class="card-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead align="center">
							<th>No</th>
							<th>Nama</th>
							<th>JK</th>
							<th>Alamat</th>
							 </thead>
		                <tbody>
			               <?php 
							$no = 1;
							foreach($data_pemilih as $pemilih){ 
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $pemilih->nama; ?></td>
								<td><?php echo $pemilih->tgl_lahir ?></td>
								<td><?php echo $pemilih->jenis_kelamin ?></td>
								<td><?php echo $pemilih->alamat ?></td>
	
								</td>
							</tr>
							<?php } ?>
						</tbody>
		              </table>
		            </div>
<?php } ?>
