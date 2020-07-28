<html lang="en">
<head>
	<?php $this->load->view("layouts/head.php") ?>
</head>
<body>
	<div class="container">
	  <form class="form-horizontal" method="post" id="printJS-form" enctype="multipart/form-data">
	     <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	      	<img src="<?php echo base_url('assets/img/logo/kpu.jpg'); ?>" style="width:80px;">
	      	<table border="0" width="100%">
	      		<tr>
	      			<td align="center" colspan="3"><h3>SURAT UNDANGAN PEMUNGUTAN SUARA</h3></td>
	      		</tr>
	      		<tr>
	      			<td colspan="3"> 
	    
			      		<p><h4>&nbsp&nbsp&nbspBersama ini diberitahukan bahwa Komisi Pemilihan Umum mengundang Saudara
			      			<?=$petugas['nama'];?> NIK/Identitas lain <?=$data_pemilih['nik'];?> untuk memberikan 
			      			suara pada Pemilihan Umum <?=$data_pemilihan['jenis_pm'];?> yang akan dilaksanakan pada : 
			      		</h4></p>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td align="left" colspan="3"> 
			      		<h4>Hari/Tanggal : <?=$pemilihan['tanggal_pm'];?><br>
			      			Tempat Pemungutan Suara (TPS) : <?=$data_pemilihan['tps_pm'];?> Kelurahan/Desa : <?=$data_pemilihan['desa_pm']?><br>
			      			Alamat : <?=$data_pemilihan['lokasi_pm'];?>
			      		</h4>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td align="right" colspan="3">
	      				<h4><?=date('d-m-Y')?></h4><br>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td colspan="3">
	      				<h4 align="center">KELOMPOK PENYELENGGARA<br>PEMUNGUTAN SUARA<br>KETUA<br><br><br><br>(<?=$petugas['ketua'];?>)</h4>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td align="center" colspan="3">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _<i class="fa fa-scissors"></i></td>
	      		</tr>
	      		<tr>
	      			<td align="center"><h4>Yang Menyerahkan<br><br><br><br></h4></td>
	      			<td align="center"><h4>Yang Menerima<br><br><br><br></h4></td>
	      			<td align="center"><h4>Diterima Tgl......................<br><br><br><br></h4></td>
	      		</tr>
	      		<tr>
	      			<td align="center">(<?=$petugas['pengantar'];?>)</td>
	      			<td align="center">(............................)</td>
	      		</tr>
	      	</table>
	      	<script>
	      		window.print();
	    	</script>
	      </div>
	    </div>
	  </form>
	</div>


    <!-- jQuery -->
    <?php $this->load->view("layouts/js.php") ?>
    <!-- ./jQuery -->


</body>
</html>
