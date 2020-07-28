<html lang="en">
<head>
  <title>Input Pemilih</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
 		<div class="container-fluid">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="#">E-Voting</a>
    		</div>
    		<ul class="nav navbar-nav">
    			<li><a href="<?=base_url('admin')?>">Home</a></li>
    			<li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pemilih
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          	<li><a href="<?=base_url('admin/input_user')?>">Input Pemilih</a></li>
			          	<li><a href="<?=base_url('admin/pemilih')?>">Tampilkan Data Pemilih</a></li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Calon
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          	<li><a href="<?=base_url('admin/input_calon')?>">Input Calon</a></li>
			          	<li><a href="<?=base_url('admin/calon')?>">Tampilkan Data Calon</a></li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Petugas
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          	<li class="active"><a href="<?=base_url('admin/input_petugas')?>">Input Petugas</a></li>
			          	<li><a href="<?=base_url('admin/petugas')?>">Tampilkan Data Petugas</a></li>
			        </ul>
			    </li>
			    <li><a href="<?php echo base_url('login/pilihan'); ?>">Jumlah Suara</a></li>
			    <li><a href="<?php echo base_url('absen/datang'); ?>">Absen</a></li>
    		</ul>
  		</div>
	</nav>
	<h1 align="center">Input Pemilih</h1>
	<div class="container">
	  <form class="form-horizontal" action="<?=base_url('admin/input_petugas')?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="nama_petugas">Nama:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
	      <div class="col-sm-10">
	        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="nama">Jenis Kelamin:</label>
	      <div class="col-sm-10">
	        <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
			<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="alamat">Alamat:</label>
	      <div class="col-sm-10">          
	        <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="agama">Agama:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="agama" name="agama">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="job">Job:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="job" name="job">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="password">Password:</label>
	      <div class="col-sm-10">
	        <input type="password" class="form-control" id="password" name="password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-success">Submit</button>
	      </div>
	    </div>
	  </form>
	</div>
</body>
</html>