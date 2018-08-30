<?php $this->load->view('header');?>
<body>
<div role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-body text-center"">
            <h2><?php echo $text;?></h2>
            <a href="<?php echo base_url($link);?>"><button class="btn btn-large btn-primary" type="button">Ok</button></a><br>
        </div>             
    </div>
</div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script type="text/javascript">
  $(window).load(function(){
        $('#myModal').modal('show');
  });
</script>
</body>
</html>