<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

<body class="hold-transition login-page">


<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>E-</b>Counting</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk mengelola halaman Admin!</p>
      <?php if ($this->session->flashdata('message')): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('message'); ?>
            </div>
      <?php endif; ?> 
      <?php if ($this->session->flashdata('sukses')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('sukses'); ?>
            </div>
      <?php endif; ?> 

      <form action="<?= base_url('admin/proses_login'); ?>" method="post">

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="E-mail">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <?php echo form_error('email'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
        
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
          <?php echo form_error('password'); ?>
       
      

      <div class="text-center mb-3">
       <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
      </form>

      <!-- <p class="mb-1">
        <a href="<?php echo base_url('admin/forgot_pass')?>">Lupa Password</a>
      </p> -->
      <p class="mb-0">
        Belum memiliki akun? Silahkan <u><a href="<?php echo base_url('admin/register')?>" class="text-center">Daftar</a></u>
      </p>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<p class="mb-01" align="center">
        E-mail : ingg@gmail.com || Pass : lololo
      </p>
    </div>
    
 <!-- jQuery -->
      <?php $this->load->view("layouts/js.php") ?>
      <!-- ./jQuery -->

  </body>
</html>
