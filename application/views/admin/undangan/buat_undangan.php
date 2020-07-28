<html lang="en">
<head>
  <title>Cetak Undangan</title>
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
    			<a class="navbar-brand" href="<?=base_url('admin')?>">HOME</a>
    		</div>
  		</div>
	</nav>
	<div class="container">
	  <form class="form-horizontal" method="post" id="printJS-form" enctype="multipart/form-data">
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	      	<img src="./assets/img/logo.jpeg">
	      	<div align="center">
	      		<h3>SURAT UNDANGAN PEMUNGUTAN SUARA</h3><br><br>
	      		<h4>Bersama ini diberitahukan bahwa Komisi Pemilihan Umum mengundang Saudara<br>
	      			<?=$data_undangan['nama'];?> NIK/Identitas lain <?=$data_undangan['nik'];?> untuk memberikan 
	      			suara pada Pemilihan Umum <?=$pemilihan['jenis_pemilihan'];?> <br>
	      			yang akan dilaksanakan pada : 
	      		</h4>
	      	</div>
	      	<div align="left">
	      		<h4>Hari/Tanggal : <?=$pemilihan['tgl_pemilihan'];?><br>
	      			Tempat Pemungutan Suara (TPS) : <?=$pemilihan['nama_tps'];?> Kelurahan/Desa : <?=$pemilihan['desa']?><br>
	      			Alamat : <?=$pemilihan['lokasi_pemilihan'];?>
	      		</h4>
	      	</div>
	      	<script>
	      		window.print();
	    	</script>
	      </div>
	    </div>
	  </form>
	</div>
</body>
</html>