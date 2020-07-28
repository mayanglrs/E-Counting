<!DOCTYPE html>
<html>
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
      <div class="card">
            <div class="card-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Undangan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('pemilihan/cetak_undangan/').$data_pemilihan['id_pm'];?>" method="post" enctype="multipart/form-data"role="form">
                <div class="card-body">
                  <label for="nama"># Data Pemilihan</label>
                  <div class="form-group">
                    <label for="nama">Jenis Pemilihan</label>
                    <input type="nama" class="form-control" id="nama" value="<?=$data_pemilihan['jenis_pm']?>" name="jenis_pm" >
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Pemilihan</label>
                    <input type="date" class="form-control" id="tgl_lahir" value="<?=$data_pemilihan['tanggal_pm']?>" name="tanggal_pm" >
                  </div>
                   <div class="form-group">
                    <label for="tgl_lahir">Tempat Pemungutan Suara(TPS)</label>
                    <input type="text" class="form-control" id="tgl_lahir" value="<?=$data_pemilihan['tps_pm']?>" name="tps_pm" >
                  </div>
                  <div class="form-group">
                    <label for="alamat">Desa/Kelurahan</label>
                    <input type="text" class="form-control" id="tgl_lahir" value="<?=$data_pemilihan['desa_pm']?>" name="desa_pm" >
                  </div>
                   <div class="form-group">
                    <label for="alamat">Lokasi Pemilihan</label>
                    <input type="text" class="form-control" id="tgl_lahir" value="<?=$data_pemilihan['lokasi_pm']?>" name="lokasi_pm">
                  </div>
                  <label for="nama"># Daftar Pemilih yang Diundang</label>
                  <div class="form-group">
                      <label for="nik">Nama Pemilih</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select Pemilih"
                          style="width: 100%;" name="">
                      <?php foreach($data_pemilih as $pm):?>
                        <option value="<?php echo $pm->id ?>"><?php echo $pm->nama ?></option>
                      <?php endforeach;?>      
                      </select>
                        </div>
                  <label for="nama"># Data Petugas</label>
                    <div class="form-group">
                      <label for="nik">Ketua</label>
                       <select class="form-control select2" style="width: 100%;" name="ketua">
                          <option selected="selected"></option>
                        <?php foreach($data_petugas as $pm):?>
                          <option value="<?php echo $pm->id_petugas ?>"><?php echo $pm->nama_petugas ?></option>
                        <?php endforeach;?>      
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="nik">Petugas Pengantar Undangan</label>
                         <select class="select2" style="width: 100%;" name="pengantar">
                          <option selected="selected"></option>
                          <?php foreach($data_petugas as $pm):?>
                            <option value="<?php echo $pm->id_petugas ?>"><?php echo $pm->nama_petugas ?></option>
                          <?php endforeach;?>      
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cetak</button>
                  <a href="#" class="btn btn-default" role="button">Kembali</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

             
            </div>
            
          </div>
    </section>
    <!-- /.content -->
`
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
    <script type="text/javascript">
    $(function () {
        $('#lstFruits').multiselect({
            includeSelectAllOption: true
        });
    });
</script>
       

</body>
</html>
