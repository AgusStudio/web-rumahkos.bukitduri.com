 <?php $this->load->view('header');?>
 <body>
    <!-- Navigation -->
    <?php $this->load->view('navigator');?>
    <!-- /.Navigator -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php $no="0"; foreach ($header_background as $key => $header1) {
             echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$no++."' class='".$header1->status."'></li>";
          } ?>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <?php foreach ($header_background as $key => $header) { ?>
          <div class="<?php echo 'carousel-item '.$header->status;?>" style="<?php echo 'background-image: url('.site_url('assets/img/rumah_kos/'.$header->background).')';?>">
            <div class="carousel-caption d-none d-md-block">
              <h1>Cari Kos & Kontrakan ?</h1>
              <?php echo form_open_multipart('welcome/search');?>
              <div class="input-group">
                <input name="src_alamat" type="text" class="form-control text-center" placeholder="Ketik nama tempat atau alamat" required>
                <span class="input-group-btn">
                  <button name="search" value="1" class="btn btn-secondary" type="submit"> Search</button>
                </span>
              </div>
              <?php echo form_close();?>
              <br/>
              <button class="btn btn-warning" data-toggle="modal" data-target="#filterasi" type="button"> Cari Dengan Filterisasi</button>
            </div>
          </div>
          <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div class="col-md-12">
      <div id="filterasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin: auto" id="myModalLabel">Cari Dengan Filterasi</h4>
            </div>
            <div class="modal-body">
              <form name="FormFilterasi" class="form-horizontal" action="<?php echo site_url('welcome/search');?>" method="POST">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Fasilitas</label>
                  <div class="col-sm-9">
                    <input name="fasilitas1" type="checkbox" id="checkbox" class="minimal" value="41"> Kamar mandi di dalam <br/>
                    <input name="fasilitas2" type="checkbox" id="checkbox" class="minimal" value="26"> Parkir Mobil <br/>
                    <input name="fasilitas3" type="checkbox" id="checkbox" class="minimal" value="3"> Ruang ber AC <br/>
                    <input name="fasilitas4" type="checkbox" id="checkbox" class="minimal" value="1"> Pasutri <br/>
                    <input name="fasilitas5" type="checkbox" id="checkbox" class="minimal" value="19"> Mempunyai Scurity <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Harga</label>
                  <div class="col-sm-9">
                    <input id="range_1" type="text" name="range_1">
                  </div>
                </div>
                <div class="form-group m-b-0">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="search_byfilter" value="1" class="btn btn-info waves-effect waves-light">Cari</button>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4 text-center">Temukan Kos dan Kontrakan Mu</h1>
      <!-- Marketing Icons Section -->
      <div class="row">
        <?php if($rumah_sewa->num_rows() > 0)
        { foreach($rumah_sewa->result() as $key=>$rumah_sewa){ ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header text-center"><?php echo $rumah_sewa->nama_rumah;?></h4>
            <div class="card-body">
              <a href="<?php echo base_url('welcome/detail/'.$rumah_sewa->kategori_rumah.'/'.$rumah_sewa->id_rumah);?>"><img src="<?php echo base_url('assets/img/rumah_kos/'.$rumah_sewa->foto_1);?>" alt="Rumah Kos" class="img-thumbnail"></a>
              <h4 class="card-header text-center"><?php if($rumah_sewa->harga_perbulan!=0){ echo "Rp ".number_format($rumah_sewa->harga_perbulan,0,',','.')."/bln";}else{ echo "Rp ".number_format($rumah_sewa->harga_pertahun,0,',','.')."/thn";}?></h4>
            </div>
            <div class="card-footer text-center">
              <a href="<?php echo base_url('welcome/detail/'.$rumah_sewa->kategori_rumah.'/'.$rumah_sewa->id_rumah);?>" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <!-- Pagination -->
        <div style="margin: auto">
          <?php echo $paging; } ?>
        </div>
      </div>
      <!-- /.row -->
      <hr/>
      <!-- Room Agen -->
      <div class="row" style="background-color: #e3e3e3">
        <div class="col-lg-12 text-center my-4">
          <h1 class="my-2">Anda pemilik rumah kos atau rumah kontrakan?</h1><h4>Promosikan properti Anda di rumahkos.bukitduri.com<br/>Atau</h4><h1 class="my-2">Anda mencari rumah kos atau rumah kontrakan?</h1><h4>Temukan rumah kos atau rumah kontrakan impian Anda disini</h4>
          <h1 class="my-4">GRATIS!!!</h1><a href="<?php echo base_url('welcome/daftar/pemilik_kos');?>" class="btn btn-success">Daftar Segera</a>
        </div>
      </div>
      <!-- /.Room Agen -->
      <hr/>
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Rumahkos.Bukitduri.com</h2>
          <p>The Modern Business in the kost:<br/>
          Kami melayani Anda dengan sepenuh hati. Kami membantu Anda pemilik rumah kos dan rumah kontrakan dalam mempromosikan properti Anda. Kami juga mambantu para pencari rumah kos dan rumah kontrakan agar cepat mendapatkan rumah kos dan rumah kontrakan impian.</p>
          <h2>Anda Berminat gabung bersama kami? </h2>
          <p>Daftarkan segera properti Anda disini <a href="<?php echo base_url('welcome/daftar/pemilik_kos'); ?>" class="btn btn-success">Daftar Segera</a></p>
          <h2>Persayaratan dan Izin membangun properti rumah kos dan kontrakan. </h2>
          <ul>
            <li>
              <strong><a href="">Surat Permohonan</a></strong>
            </li>
            <li><strong><a href="">Izin membangun rumah kos</a></strong></li>
            <li><strong><a href="">Izin membangun bangunan kelas C</a></strong></li>
            <li><strong><a href="">Proposal izin rumah kost</a></strong></li>
          </ul>
          <p>Perizinan lengkap, taat aturan, berbisnis pun lega.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="<?php echo base_url('assets/img/rumah_kos/Rumah-Kos3.jpg');?>" alt="">
        </div>
      </div>
      <!-- /.row -->
      <hr>
      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Butuh Informasi lebih lengkap?<br/>
          Telepone kami rumahkos.bukitduri.com layanan 24jam, kami melayani Anda dengan sepenuh hati.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to (021) 8305311</a>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <!-- footer -->
    <?php $this->load->view('footer');?>
    <!-- /.footer -->
  </body>
</html>
