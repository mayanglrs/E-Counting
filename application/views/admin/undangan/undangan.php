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
	  <form class="form-horizontal" action="<?=base_url('admin/cetak_undangan/').$data_undangan['id'];?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="nama">Nama:</label>
	      <div class="col-sm-10">
	        <label class="form-control" id="nama" name="nama"><?=$data_undangan['nama'];?></label>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="jenis_pemilihan">Jenis Pemilihan:</label>
	      <div class="col-sm-10">
	        <select class="form-control" name="jenis_pm" id="jenis_pm">
	        	<option value="">Jenis Pemilihan</option>
	        	<?php foreach($pemilih->result_array() as $jenis):?>
	        	<option value="<?=$jenis['jenis_pm'];?>"><?=$jenis['jenis_pm']?></option>
	        	<?php endforeach; ?>
	        </select>
	      </div>
	    </div>
	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->
	    <script type="text/javascript">
	    	$(document).ready(function(){
		    	$('#jenis_pm').change(function(){
		    		var jenis_pm=$(this).val();
		    		$.ajax({
		    			url : "<?php echo site_url('admin/sub_undangan');?>",
		    			method : "POST",
		    			data : {jenis_pm : jenis_pm},
		    			async : true,
		    			dataType : 'json',
		    			success : function(data){
		    				var tanggal_pm, lokasi_pm, tps_pm, desa_pm;
		    				var i, html;
		    				
		    				for(i=0;i<data.length;i++) {
		    					tanggal_pm = data[i].tanggal_pm;
		    					lokasi_pm = data[i].lokasi_pm;
		    					tps_pm = data[i].tps_pm;
		    					desa_pm = data[i].desa_pm
		    				}
		    				$('#tanggal_pm').val(tanggal_pm);
		    				$('#lokasi_pm').val(lokasi_pm);
		    				$('#tps_pm').val(tps_pm);
		    				$('#desa_pm').val(desa_pm)
		    			}
		    		});
		    		return false;
		    	});
		    });
	    </script>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="tanggal_pm">Tanggal Pemilihan:</label>
	      <div class="col-sm-10">
	        <input type="date" class="form-control" id="tanggal_pm" name="tanggal_pm">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="lokasi_pm">Lokasi Pemilihan:</label>
	      <div class="col-sm-10">   
	        <textarea class="form-control" rows="5" id="lokasi_pm" name="lokasi_pm"></textarea>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="tps_pm">Nama TPS:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="tps_pm" name="tps_pm">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="desa_pm">Kelurahan/Desa:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="desa_pm" name="desa_pm">
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-success">Print</button>
	        <a href="<?=base_url('admin/pemilih')?>" class="btn btn-default" role="button">Kembali</a>
	      </div>
	    </div>
	  </form>
	</div>
</body>
</html>