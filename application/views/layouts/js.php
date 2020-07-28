<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/adminlte/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.world.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/adminlte/plugins/moment/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/adminlte/plugins/fastclick/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/adminlte/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/adminlte/dist/js/demo.js') ?>"></script>

<!-- ChartJS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/adminlte/plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/adminlte/plugins/toastr/toastr.min.js') ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>

<script>
	 $(function () {
	 	//Initialize Select2 Elements
    	$('.select2').select2()

	    //Datemask dd/mm/yyyy
	    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
	 })

</script>

<script type="text/javascript">
	// Default Configuration
		$(document).ready(function() {
			toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
		});

	// Toast Type
		$('#success').click(function(event) {
			toastr.success('You clicked Success toast');
		});
		$('#info').click(function(event) {
			toastr.info('You clicked Info toast')
		});
		$('#error').click(function(event) {
			toastr.error('You clicked Error Toast')
		});
		$('#warning').click(function(event) {
			toastr.warning('You clicked Warning Toast')
		});

	// Toast Image and Progress Bar
		$('#image').click(function(event) {
			toastr.options.progressBar = true,
			toastr.info('<img src="https://image.flaticon.com/icons/svg/34/34579.svg" style="width:150px;">', 'Toast Image')
		});


	// Toast Position
		$('#position').click(function(event) {
			var pos = $('input[name=position]:checked', '#positionForm').val();
			toastr.options.positionClass = "toast-" + pos;
			toastr.options.preventDuplicates = false;
			toastr.info('This sample position', 'Toast Position')
		});
	</script>
	<script type="text/javascript">
		$('.toastrDefaultSuccess').click(function() {
	      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
	    });
	    $('.toastrDefaultInfo').click(function() {
	      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
	    });
	    $('.toastrDefaultError').click(function() {
	      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
	    });
	    $('.toastrDefaultWarning').click(function() {
	      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
	    });
	</script>