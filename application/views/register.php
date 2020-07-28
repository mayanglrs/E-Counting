<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url('admin/register')?>"><b>E-</b>Counting</a>
  </div>
    
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Form untuk login ke halaman Administrator </p>
     <?php echo $this->session->flashdata('failed'); ?>
      <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
      <?php endif; ?>
      <form action="<?=base_url('admin/proses_register')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control select2" style="width: 100%;" name="kota">
              <option selected="selected">-----------------Pilih Kab/Kota----------------</option>
            <?php foreach($data_kota as $kota):?>
              <option value="<?php echo $kota->nama ?>"><?php echo $kota->nama ?></option>
            <?php endforeach;?>      
            </select>
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="desa" placeholder="Desa/Kelurahan">
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="no_tps" placeholder="No TPS di Tempatmu">
          <div class="input-group-append input-group-text">
              <span class="fas fa-"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Retype password">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        

      <div class="text-center">
        <button type="submit" class="btn btn-block btn-primary">Register</button>
      </div>
      <br/>
      <p class="text-center">Sudah memiliki akun? Silahkan <u><a href="<?php echo base_url('admin/login')?>" class="text-center">Masuk</a></u></p>
      </form>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.card -->
</div>
<!-- /.register-box -->
 <!-- jQuery -->
      <?php $this->load->view("layouts/js.php") ?>
      <!-- ./jQuery -->

  </body>
</html>
