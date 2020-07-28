$this->load->library('toastr');
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/toastr/toastr.min.css') ?>">

    <script type="text/javascript">


    <?php if ($this->session->flashdata('success')) {?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php } else if ($this->session->flashdata('warning')) {?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } else if ($this->session->flashdata('info')) {?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php }?>


    </script>
    
<script src="<?php echo base_url('assets/adminlte/plugins/toastr/toastr.min.js') ?>"></script>