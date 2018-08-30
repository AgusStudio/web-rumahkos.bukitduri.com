<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; rumahkos.bukitduri.com 2017</p>
  </div>
  <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/gallery/isotope.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/magnific-popup/magnific-popup.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>  
<script src="<?php echo base_url('assets/plugins/iCheck/iCheck.min.js');?>"></script>  
<!-- Ion Slider -->
<script src="<?php echo base_url('assets/plugins/ionslider/ion.rangeSlider.min.js');?>"></script>
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
        });
        $('#myModal').modal('show');
        $('#zoom_01').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
       });  
    </script>
    <script>
  $(function () {
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
    /* ION SLIDER */
    $("#range_1").ionRangeSlider({
      min: 0,
      max: 10000000,
      from: 200000,
      to: 4000000,
      type: 'double',
      step: 1,
      prefix: "Rp",
      prettify: false,
      hasGrid: true
    });
  });
</script>
<script>
    function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
        var gb = gambar.files;
        
//                loop untuk merender gambar
        for (var i = 0; i < gb.length; i++){
//                    bikin variabel
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);            
            var reader = new FileReader();                   
            if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element) { 
                    return function(e) { 
                        element.src = e.target.result; 
                    }; 
                })(preview);
//                    membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            }else{
//                        jika tipe data tidak sesuai
                alert("Type file tidak sesuai. Khusus image.");
            }    
        }    
    }
</script>