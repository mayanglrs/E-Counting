<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/style/login.css') ?>" type="text/css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/toastr/toastr.min.css') ?>">
</head>
<body>
	<body>
		
			<table width="100%" colspan="2" cellpadding="10" cellspacing="0">
			<div id="wrapper">
				<div class="header">
            		<img src="<?=base_url('assets/img/logo/pp.png')?>"alt="logo" width="200px" height="50px"/>
					
				</div>	
				<div id="content">
				<tr>
				<td width="50%">
					<div class="desk">
         		 		<img src="<?=base_url('assets/img/logo/gambar.png')?>" class="img" alt="gambar"/>
						<p class="samping" padding-top="1">Cara memilih : <br/> Masukkan NIK yang sudah
						telah terdaftar untuk memilih<br>Pilih calon Kepala Desa dengan mencentang
						kotak sesuai pilihan.</p>
					</div>
				</td>
				
				
				<td width="50%">
					
					<div class="judul">
						<h1 class="atas">E-COUNTING</h1>
						<p class="bawah">Pemilihan Umum Kepala Desa<br/>
						SUMBERSARI Tahun 2019</p>
					</div>
					
					<div class="login">
					
						
						<div class="grup">
							<h1 align="center">Klik NEXT Untuk Memilih</h1>

							<form action="<?=base_url('user/memilih'); ?>">
							<button type="submit" class="tombol_login">NEXT</button>
							</form>
						</div>
						     
					</form> 
						
				</td>
				
				</tr>
				</div>
			</div>
			</table>
				<div class="footer">
					<h4>Copyright &copy2019 E-COUNTING KEPALA DESA</h4>
				</div>
				</div>
        </div>
		
</body>
</html>
<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/toastr/toastr.min.js') ?>"></script>


<!-- Toastr -->
<script type="text/javascript">
	 $('.toastrDefaultInfo').click(function() {
      toastr.info('Siap untuk memilih ya!')
    });
</script>
