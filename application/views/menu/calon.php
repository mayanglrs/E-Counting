<?php foreach($data_calon->result_array() as $row){ ?>
						<div class="card-deck">
					          <div class="row">

					            <!-- Profile Image -->
					            <div class="card card-primary card-outline" style="width:15rem;">
					              <div class="card-body box-profile">
					                <div class="text-center">
					                  <img class="profile-user-img img-fluid img-circle"
					                       src="<?php echo base_url('assets/img/').$row['foto']; ?>"
					                       alt="User profile picture">
					                </div>

					                <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

					                <p class="text-muted text-center">Software Engineer</p>

					                <ul class="list-group list-group-unbordered mb-3">
					                  <li class="list-group-item">
					                    <b>Alamat</b> <a class="float-right"><?php echo $row['alamat']; ?></a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Following</b> <a class="float-right">543</a>
					                  </li>
					                  <li class="list-group-item">
					                    <b>Friends</b> <a class="float-right">13,287</a>
					                  </li>
					                </ul>
					              </div>&nbsp&nbsp
					              <!-- /.card-body -->
					            <!-- /.card -->
					       </div>
					   </div>

				<?php } ?>