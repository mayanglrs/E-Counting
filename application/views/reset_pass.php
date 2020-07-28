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
      
      <h5 class="login-box-msg">Hello <span></span>, Silakan isi password baru anda.</h5>
      <?php if(isset($error)) { echo $error; }; ?>

       <?php echo form_open('Lupa_password/reset_password'); ?>  

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Your New Password ...">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <?php echo form_error('password'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" value="<?php echo set_value('confirm_pass'); ?>" placeholder="Retype Password">
        
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
          <?php echo form_error('confirm_password'); ?>
      

      <div class="text-center mb-3">
       <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
      </div>
      </form>

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
