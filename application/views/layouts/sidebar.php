 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/adminlte/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">E-COUNTING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php $foto = $this->session->userdata("user_foto"); ?>
          <img src="<?php echo base_url('assets/img/'.$foto) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"  data-toggle="modal" data-target="#modal-sm"><?php echo $this->session->userdata("user_nama"); ?></a>
        </div>

        <!-- Nav Item - User Information -->
          
      </div>


          </ul>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url('admin')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('calon')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Calon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('pemilih')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pemilih</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('petugas')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Petugas</p>
                </a>
              </li>
            </ul>
          </li>

   
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Daftar Hadir
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('absen')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('absen/daftar')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kehadiran</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('pemilihan')?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Pemilihan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('counting'); ?>" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Counter Data
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/grafik'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Grafik Pemilihan
              </p>
            </a>
          </li>

         <!--  <li class="nav-item">
            <a href="<?php echo base_url('c1'); ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Model Form C6
              </p>
            </a>
          </li>
 -->
        <!--   <li class="nav-item">
            <a href="<?php echo base_url('bangun'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Cobs
              </p>
            </a>
          </li> -->
          


          <!-- <li class="nav-item">
            <a href="<?=base_url('c1')?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Form Model C1
              </p>
            </a>
          </li> -->


        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
  </aside>

      <div class="modal fade" id="modal-sm">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Data Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?php $foto = $this->session->userdata("user_foto"); ?>
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url('assets/img/'.$foto) ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $this->session->userdata("user_nama"); ?></h3>

                <p class="text-muted text-center">Administrator</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email-mu</b> <a class="float-right"><?php echo $this->session->userdata("user_email"); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>TPS</b> <a class="float-right"><?php echo $this->session->userdata("user_tps"); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Lokasi TPS</b> <a class="float-right"><?php echo $this->session->userdata("user_desa"); ?>,<?php echo $this->session->userdata("user_kota"); ?></a>
                  </li>
                </ul>

                <a href="<?=base_url('admin/logout')?>" class="btn btn-primary btn-block"><b>Logout</b></a>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->

          </div>
          
              </div>
              </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>