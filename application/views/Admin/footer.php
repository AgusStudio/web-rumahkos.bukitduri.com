        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/blue/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/blue/js/jquery.scrollTo.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-detectmobile/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/fastclick/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-slimscroll/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/jquery-blockui/jquery.blockUI.js');?>"></script>
        <!-- sweet alerts -->
        <script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.init.js');?>"></script>
        <!-- date picker -->
        <script src="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-timepicker.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/toggles/toggles.min.js');?>"></script>
        <!-- Counter-up -->
        <script src="<?php echo base_url('assets/blue/assets/counterup/waypoints.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/blue/assets/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('assets/blue/js/jquery.app.js');?>"></script>
        <!-- Dashboard -->
        <script src="<?php echo base_url('assets/blue/js/jquery.dashboard.js');?>"></script>
         <!--Tabel-->
        <script src="<?php echo base_url('assets/blue/assets/datatables/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('assets/blue/assets/datatables/dataTables.bootstrap.js');?>"></script>
        <!-- Todo -->
        <script src="<?php echo base_url('assets/blue/js/jquery.todo.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/blue/assets/gallery/isotope.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/blue/assets/magnific-popup/magnific-popup.js');?>"></script> 
        <script src="<?php echo base_url('assets/blue/assets/responsive-table/rwd-table.min.js" type="text/javascript');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
                $('.wysihtml5').wysihtml5();
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                // Form Toggles
                jQuery('.toggle').toggles({on: true});
                //timepicker
                jQuery('#timepicker2').timepicker({showMeridian: false});
                // Date Picker
                jQuery('#datepicker').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    autoclose: true
                });
                jQuery('#datepicker1').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    autoclose: true
                });
                jQuery('#datepicker2').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    autoclose: true
                });
                jQuery('#datepicker3').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    autoclose: true
                });
            });
            jQuery('#timepicker').timepicker({showMeridian: false});
        jQuery('#timepicker2').timepicker({showMeridian: false}); 
        </script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatable').dataTable();
                $('#datatable2').dataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#tablelaporan').dataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": false,
                    "info": true,
                    "autoWidth": true
                });
            });
        </script>
    </body>
</html>