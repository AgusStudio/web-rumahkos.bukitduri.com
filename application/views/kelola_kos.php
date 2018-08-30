<?php $this->load->view('admin/header');?>
 <body>
  <!-- Begin page -->
  <div id="wrapper"> 
    <!-- Top Bar Start -->
    <?php $this->load->view('top_menu');?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view('sidebar');?>
    <div class="content-page"><!-- Start content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb pull-right">
                <li class="active"><a href="#">Home</a></li>
              </ol>
            </div>
          </div>
          <div class="col-lg-12">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php $no="0"; foreach ($header_background as $key => $header1) {
             echo "<li data-target='#myCarousel2' data-slide-to='".$no++."' class='".$header1->status."'></li>";
              } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
              <?php foreach ($header_background as $key => $header) { ?>
              <div class="<?php echo 'item '.$header->status;?>">
                <img src="<?php echo base_url('assets/img/rumah_kos/'.$header->background);?>" alt="Slide Image" style="width: 100%; height: 300px">
                <div class="container">
                  <div class="carousel-caption">
                  <h1 class="text-white">Rumahkos.Bukitduri.com partner bisnis kos dan kontrakan terpercaya</h1>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        </div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
<!-- footer -->
<?php $this->load->view('admin/footer');?>