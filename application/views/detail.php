 <?php $this->load->view('header');?>
 <body>
    <!-- Navigation -->
    <?php $this->load->view('navigator');?>
    <!-- /.Navigator -->
    <!-- Page Content -->
    <div class="container">
      <div class="row"> 
      <?php for($i=1;$i<=4;$i++){ $pict= "foto_".$i; $target="#PictProfile".$i; ?>
      <div class="col-lg-3">
        <div class="gal-detail thumb my-3">
          <a href="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" class="image-popup" title="Screenshot-1"><img  width="250px" height="200px" src="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" alt="Image"></a>
        </div>
      </div>
      <?php } ?>
    </div>
      <h1 class="my-4 text-center"><?php echo $detail->nama_rumah;?> <button class="btn btn-secondary pull-right" <?php if($this->session->userdata('log_user')==""){ echo "data-toggle='modal' data-target='#login'";}else{ echo "data-toggle='modal' data-target='#laporkan'";}?> type="button"> Laporkan Kos</button>
        <button class="btn btn-success pull-right mx-3" <?php if($this->session->userdata('log_user')==""){ echo "data-toggle='modal' data-target='#login'";}else{ echo "data-toggle='modal' data-target='#survei'";}?> type="button"> Survei</button>
      </h1>
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-md-12">
          <div id="laporkan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" style="margin: auto" id="myModalLabel">Laporkan Kos atau Kontrakan</h4>
                </div>
                <div class="modal-body">
                  <form name="Formlaporkan" class="form-horizontal" action="<?php echo site_url('welcome/laporkan');?>" method="POST">
                    <div class="form-group">
                      <input type="text" name="id_rumah" value="<?php echo $detail->id_rumah;?>" hidden="hidden">
                      <input type="text" name="tipe" value="<?php echo $detail->kategori_rumah;?>" hidden="hidden">
                      <input type="text" name="id_user" value="<?php echo $user->id_user;?>" hidden="hidden">
                      <input name="laporan_foto" type="checkbox" id="checkbox" class="minimal" value="1"> Foto tidak sesuia (depan, bangunan, kamar, dan kamar mandi) <br/>
                      <input name="laporan_alamat" type="checkbox" id="checkbox" class="minimal" value="1"> Alamat lengkap tidak sesuai <br/>
                      <input name="laporan_tlp" type="checkbox" id="checkbox" class="minimal" value="1"> No telepon tidak bisa di hubungi <br/>
                      <input name="laporan_harga" type="checkbox" id="checkbox" class="minimal" value="1"> Harga tidak sesuia <br/>
                      <input name="laporan_fasilitas" type="checkbox" id="checkbox" class="minimal" value="1"> Fasilitas tidak sesuai <br/>
                      <input name="laporan_lain" type="checkbox" id="checkbox" class="minimal" value="1"> Laporkan lainnya <br/>
                    </div>
                    <div class="form-group">
                      <textarea name="laporan_detail" class="form-control" placeholder="Laporkan secara detail disini"></textarea>
                    </div>
                    <div class="form-group m-b-0">
                      <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Kirim</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="survei" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" style="margin: auto" id="myModalLabel">Buat Janji Survei</h4>
                </div>
                <div class="modal-body">
                  <form name="Formlaporkan" class="form-horizontal" action="<?php echo site_url('welcome/pro_survei');?>" method="POST">
                    <div class="form-group">
                      <input type="text" name="id_rumah" value="<?php echo $detail->id_rumah;?>" hidden="hidden">
                      <input type="text" name="tipe" value="<?php echo $detail->kategori_rumah;?>" hidden="hidden">
                      <input type="text" name="id_user" value="<?php echo $user->id_user;?>" hidden="hidden">
                      <input name="tgl_survei" type="text" id="datepicker" class="form-control" placeholder="Tanggal Survei">
                    </div>
                    <div class="form-group">
                      <Ldiv class="bootstrap-timepicker"><input name="time_survei" type="time" id="timepicker" class="form-control" placeholder="Jam Survei"></Ldiv>
                    </div>
                    <div class="form-group">
                      <textarea name="pesan" class="form-control" placeholder="Tulis pesan di sini"></textarea>
                    </div>
                    <div class="form-group m-b-0">
                      <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Kirim</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
      </div>
      <div class="row mx-3">
        <div class="col-lg-8 mb-4">
          <!-- Fasilitas Umum -->
          <div class="row my-2">
            <div class="col-lg-4">
              <h6> Fasilitas Umum</h6>
            </div>
            <div class="col-lg-8">
              <div class="row my-2">
                <?php foreach ($f_umum as $f_umum) : ?>
                <div class="col-lg-4">
                  <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_umum->icon_fasilitas);?>" />&nbsp<?php echo $f_umum->nama_fasilitas;?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- Fasilitas Ruang -->
          <hr/>
          <div class="row my-2">
            <div class="col-lg-4">
              <h6> Fasilitas Ruang</h6>
            </div>
            <div class="col-lg-8">
              <div class="row my-2">
                <?php foreach ($f_ruang as $f_ruang) : ?>
                <div class="col-lg-4">
                  <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_ruang->icon_fasilitas);?>" />&nbsp<?php echo $f_ruang->nama_fasilitas;?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- Fasilitas mck -->
          <hr/>
          <div class="row my-2">
            <div class="col-lg-4">
              <h6> Fasilitas MCK</h6>
            </div>
            <div class="col-lg-8">
              <div class="row my-2">
                <?php foreach ($f_mck as $f_mck) : ?>
                <div class="col-lg-4">
                  <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_mck->icon_fasilitas);?>" />&nbsp<?php echo $f_mck->nama_fasilitas;?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- Fasilitas parkir -->
          <hr/>
          <div class="row my-2">
            <div class="col-lg-4">
              <h6> Fasilitas Parkir</h6>
            </div>
            <div class="col-lg-8">
              <div class="row my-2">
                <?php foreach ($f_parkir as $f_parkir) : ?>
                <div class="col-lg-4">
                  <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_parkir->icon_fasilitas);?>" />&nbsp<?php echo $f_parkir->nama_fasilitas;?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- Fasilitas lingkungan -->
          <hr/>
          <div class="row my-2">
            <div class="col-lg-4">
              <h6> Fasilitas Lingkungan</h6>
            </div>
            <div class="col-lg-8">
              <div class="row my-2">
                <?php foreach ($f_lingkungan as $f_lingkungan) : ?>
                <div class="col-lg-4">
                  <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_lingkungan->icon_fasilitas);?>" />&nbsp<?php echo $f_lingkungan->nama_fasilitas;?>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <h4 class="card-header text-center"><?php echo "Jumlah ".$jml_kamar." Kamar";?></h4>
            <div class="card-body">
              <?php if($detail->harga_perhari!="0"){ echo "<div class='btn btn-primary' style='width:100%'><b class='pull-left'>Rp ".number_format($detail->harga_perhari,0,',','.')."</b><b class='pull-right'> /Hari</b></div><hr/>"; }
              if($detail->harga_perbulan!="0"){ echo "<div class='btn btn-primary' style='width:100%'><b class='pull-left'>Rp ".number_format($detail->harga_perbulan,0,',','.')."</b><b class='pull-right'> /Bulan</b></div><hr/>"; }
              if($detail->harga_pertahun!="0"){ echo "<div class='btn btn-primary' style='width:100%'><b class='pull-left'>Rp ".number_format($detail->harga_pertahun,0,',','.')."</b><b class='pull-right'> /Tahun</b></div>"; }
              ?>
            </div>
            <div class="card-footer text-center">
              <h4 class="text-center"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/listrik.png');?>"><?php if($detail->listrik==1){ echo "Sudah Termasuk Listrik"; }else{ echo "Tidak termasuk Listrik";} ?></h4>
            </div>
          </div>
          <div class="my-2">
            <h3>Contact Details</h3>
            <p><?php echo $detail->alamat_rumah.'&nbsp RT.'.$detail->rt.'/ RW.'.$detail->rw.'<br/>'.$detail->nama_desa.', '.$detail->kecamatan.', '.$detail->kota.', '.$detail->provinsi;?>
            </p>
            <i class="fa fa-phone"></i> <?php echo $detail->tlp_rumah;?><br/>
            <i class="fa fa-whatsapp"></i> <?php echo $detail->no_whatsapp;?>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr/>
      <!-- Room Agen -->
      <div class="row" style="background-color: #e3e3e3">
        <div class="col-lg-12 text-center my-4">
          <h1 class="my-2">Anda pemilk rumah kos atau rumah kontrakan?</h1><h4>Promosikan properti Anda di rumahkos.bukitduri.com<br/>Atau</h4><h1 class="my-2">Anda mencari rumah kos atau rumah kontrakan?</h1><h4>Temukan rumah kos atau rumah kontrakan impian Anda disini</h4><h1 class="my-4">GRATIS!!!</h1><a href="#" class="btn btn-success">Daftar Segera</a>
        </div>
      </div>
      <br/>
      <!-- /.Room Agen -->
    </div>
    <!-- /.container -->
    <!-- footer -->
    <?php $this->load->view('footer');?>
      <?php $this->load->view('admin/footer');?>
    <!-- /.footer -->
  </body>
</html>
