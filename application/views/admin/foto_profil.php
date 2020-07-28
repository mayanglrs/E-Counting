<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("layouts/head.php") ?>
</head>

		<div class="login-box">
    <div class="container">
    <h1>Upload Fotomu!</h1>
    <hr>
    <div class="card">
    <div class="card-body login-card-body">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" style="width:250px" alt="avatar">
         </div><br/>
          
          <form role="form" action="<?=base_url('admin/proses_register')?>" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <input type="file" class="form-control" name="foto">
              <div class="input-group-append input-group-text">
                  <span class="fas fa-camera"></span>
              </div>
            </div>
            <div class="text-center mb-3">
             <button type="submit" class="btn btn-primary btn-block btn-flat">Lanjut yuk!</button>
            </div>
          </form>
      </div>
     </div> 
      </div>
</div>
<!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view("layouts/js.php") ?>
    <!-- ./jQuery -->


</body>
</html>
