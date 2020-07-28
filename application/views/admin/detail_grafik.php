<html lang="en">
<head>
  <?php $this->load->view("layouts/head.php") ?>
   <?php 
	        foreach($grafik as $data){
	            $pilihan[] = $data->pilihan;
	            $jumlah[] = (float) $data->jumlah;
	        }
    ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
			<!-- Navbar -->
			<?php $this->load->view("layouts/navbar.php") ?>
			<!-- /.navbar -->


		    <!-- Sidebar Menu -->
		    <?php $this->load->view("layouts/sidebar.php") ?>
		    <!-- /.sidebar -->
		  
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">

			    <br/><br/>

			    <!-- Main content -->
			    <section class="content">

			    <?php if ($jumlah < 0){ $belum = $this->session->set_flashdata('belum','Belum ada pemungutan suara!'); ?>
			    	<!-- Default box -->
			      	<?php if ($this->session->flashdata('belum')): ?>
			      		<div class="alert alert-warning" role="alert">
				            <?php echo $this->session->flashdata('belum'); ?>
				          </div>
				    <?php endif; ?>

				<?php }else{ ?>   
		      		<div class="card">
		      	
			        <div class="card-header bg-gradient-danger">
			          <h3 class="card-title">GRAFIK PEMILIHAN</h3>

			          <div class="card-tools">
			            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			              <i class="fas fa-minus"></i></button>
			            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
			              <i class="fas fa-times"></i></button>
			          </div>
			        </div>
			        <div class="card-body">
			            <canvas id="myChart" style="max-width:900px;"></canvas>
			        </div>
		        <?php } ?>
		      </div>
		      <!-- /.card -->

			    

		          
			  
  			</section>
			    <!-- /.content -->
 		  </div>
		  <!-- /.content-wrapper -->

		  <!-- Footer -->
		  <?php $this->load->view("layouts/footer.php") ?>
		  <!-- /Footer -->	

		  <!-- Control Sidebar -->
		  <aside class="control-sidebar control-sidebar-dark">
		    <!-- Control sidebar content goes here -->
		  </aside>
		  <!-- /.control-sidebar -->

	    <!-- jQuery -->
	    <?php $this->load->view("layouts/js.php") ?>
	    <!-- ./jQuery -->
	     <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
			  type: 'bar',
			  data: {
			    labels: <?php echo json_encode($pilihan);?>,
			    datasets: [{
			      label: '# of Votes',
			      data: <?php echo json_encode($jumlah);?>,
			      backgroundColor: [
			        'rgba(255, 99, 132, 0.2)',
			        'rgba(54, 162, 235, 0.2)',
			        'rgba(255, 206, 86, 0.2)',
			        'rgba(75, 192, 192, 0.2)',
			        'rgba(153, 102, 255, 0.2)',
			        'rgba(255, 159, 64, 0.2)'
			      ],
			      borderColor: [
			        'rgba(255,99,132,1)',
			        'rgba(54, 162, 235, 1)',
			        'rgba(255, 206, 86, 1)',
			        'rgba(75, 192, 192, 1)',
			        'rgba(153, 102, 255, 1)',
			        'rgba(255, 159, 64, 1)'
			      ],
			      borderWidth: 1
			    }]
			  },
			  options: {
			    scales: {
			      yAxes: [{
			        ticks: {
			          beginAtZero: true
			        }
			      }]
			    }
			  }
			});
			function myFunction1() {
			  var y = document.getElementById("myDIV1");
			  if (y.style.display === "none") {
			    y.style.display = "block";
			  } else {
			    y.style.display = "none";
			  }
			}
		</script>

	</body>
</html>