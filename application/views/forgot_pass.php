<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
  
  
</head>

<body class="hold-transition login-page">


<div class="login-box">
  <!-- /.login-logo -->
  <div class="card"><br/>
      <div class="text-center">
        <h3><img src="<?= base_url('assets/img/logo/lock.png'); ?>"></i></h3>
      </div>
    <div class="card-body login-card-body">
      <H2 class="login-box-msg">Forgot Password?</H2>
      <p class="login-box-msg">You can reset your password here.</p>
      <?php if(isset($error)) { echo $error; }; ?>

       <?php echo form_open('lupa_password');?> 

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Your Email ..">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <?php echo form_error('email'); ?>
      

      <div class="text-center mb-3">
       <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
      </div>

      <p class="mb-0">
        <a href="<?php echo base_url('admin/login')?>" class="text-center">Back to Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
    
 <!-- jQuery -->
      <?php $this->load->view("layouts/js.php") ?>
      <!-- ./jQuery -->

  </body>
</html>
