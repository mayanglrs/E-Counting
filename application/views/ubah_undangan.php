<html lang="en">
<head>
  <title>Undangan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Undangan</h1>
	<div class="container">
	  <form class="form-horizontal" action="<?=base_url('admin/update_undangan/').$data_undangan['nik'];?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="nama">Nama:</label>
	      <div class="col-sm-10">
	        <label class="form-control" id="nama" name="nama"><?=$data_undangan['nama'];?></label>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="jenis_pemilihan">Jenis Pemilihan:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="jenis_pemilihan" name="jenis_pemilihan">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="tgl_pemilihan">Tanggal Pemilihan:</label>
	      <div class="col-sm-10">
	        <input type="date" class="form-control" id="tgl_pemilihan" name="tgl_pemilihan">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="lokasi_pemilihan">Lokasi Pemilihan:</label>
	      <div class="col-sm-10">   
	        <textarea class="form-control" rows="5" id="lokasi_pemilihan" name="lokasi_pemilihan"></textarea>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="nama_tps">Nama TPS:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="nama_tps" name="nama_tps">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="dpt">Jumlah Pemilih:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="dpt" name="dpt">
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-success">Simpan</button>
	        <a href="<?=base_url('admin/cetak_undangan')?>" class="btn btn-default" role="button">Kembali</a>
	      </div>
	    </div>
	  </form>
	</div>
</body>
</html>