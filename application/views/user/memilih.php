<html>
<head>
	<?php $this->load->view("layouts/head.php") ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/style/user.css') ?>">
	<style type="text/css">
		.jarak{
			padding:10px;
		}
		.gede{
			font-size:40px;
		}
			/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img{
  cursor: pointer;

}

/* CHECKED STYLES */
[type=radio]:checked + img{
  outline: 2px solid #f00;

}
	</style>
</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper jarak">

		<section class="content-wrapper">
		<?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-info" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php endif; ?>
       	
       		
			<div class="row">
				<div class="col-md-12">
				<div class="card text-center bg-primary">
				  <div class="card-body">
				    <h1 class="card-title gede">SILAHKAN PILIH CALON ANDA!</h1>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				  </div>
				</div>
				</div>
			</div>
			<!-- Default box -->

			<div class="row row-centered">
				<?php foreach($data_calon as $calon) { ?>
					
			        <div class="container card"  style="width: 20rem;" data-toggle="modal" data-target="#modal_proses<?php echo $calon->id;?>">
			        	<a href="<?=base_url('user/proses/').$calon->id ?>" style="color:#000;">
			        	<h1 class="gede" style="text-align:center"><?=$calon->no_urut?></h1><hr>
			        	<label>
						  	<input type="radio" name="id_calon" value="<?=$calon->id?>" checked>
						  	<img class="card-img-top" src="<?=base_url('assets/img/').$calon->foto; ?>" alt="Card image cap">
						  	<hr>
						  	<div class="card-footer" style="text-align:center;"><br/><?=$calon->nama; ?></div>

					 	</label></a>
					</div>
					
		    	<?php } ?>
		    </div>


			<div class="row">
				<div class="col-md-12">
				<div class="card text-center bg-primary">
				  <div class="card-body">
				    <p>-sukseskan pemilu 2019-</p>
				  </div>
				</div>
				</div>
			</div>

			<?php foreach($data_calon as $calon) { ?>
			<form action="<?php echo base_url('user/proses/').$calon->id ?>" method="post">
			 <div class="modal fade" id="modal_proses<?php echo $calon->id;?>">
		        <div class="modal-dialog modal-sm">
		          <div class="modal-content">
		            <div class="modal-header">
		              <h4 class="modal-title">Konfirmasi Pilihan</h4>
		              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>
		            <div class="modal-body" align="center">
		              <p>YAKIN MEMILIH <b style="text-transform: uppercase;"><?php echo $calon->nama?></b> ?</p>
		            </div>
		            <div class="modal-footer justify-content-between">
		              <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
		              <button type="submit" onclick="onClick(<?php echo $calon->rand ?>)"class="btn btn-primary">YA!</button>
		            </div>
		          </div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		      </div>
		      <!-- /.modal -->
			</form>
			<?php } ?>
		</section>



   		<!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->

	   	</div>

	</body>
	<?php foreach($data_calon as $calon) { ?>
	<script src="<?php echo base_url('assets/adminlte/plugins/recta/recta.js') ?>"></script>
	<script type="text/javascript">
	  var printer = new Recta('4444345538', '1811')

	  function onClick (rand) {
	    printer.open().then(function () {
	      printer.align('center')
	        .bold(true)
	        // .text(no_urut)
	        .text('Masukkan dalam kotak suara!')
	        // .text(""+rand+"")
	        .barcode('ITF', ""+rand+"")
	        .cut()
	        .print()
	    })
	  }
	</script>
	<?php } ?>
</html>