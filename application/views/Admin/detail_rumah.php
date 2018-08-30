<?php $this->load->view('admin/header');?>
<body> 
  <div id="wrapper"> 
    <!-- Top Bar Start -->
    <?php $this->load->view('admin/top_menu');?>
    <?php $this->load->view('admin/sidebar');?>
		<div class="content-page"><!-- Start content -->
      <div class="content">
        <div class="container">
					<div class="row">
						<div class="col-sm-12">
              <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url('admin');?>">Home</a></li>
                <li class="active"><a href="<?php echo base_url('admin/rumah_sewa/'.$detail->kategori_rumah);?>"><?php echo $kat; ?></a></li>
              </ol>
            </div>
					</div>
					<!-- Start Widget -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title text-center"><?php echo $detail->nama_rumah;?></h4>
                </div>
                <div class="panel-body"><!-- Panel-body-->
                  <div class="row"> 
                    <?php for($i=1;$i<=4;$i++){ $pict= "foto_".$i; $target="#PictProfile".$i; ?>
                    <div class="col-lg-3">
                      <a href="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" class="image-popup" title="Screenshot-1"><img class="img-fluid" width="100%" height="200" src="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" alt="Image"></a>
                    </div>
                    <?php } ?>
                  </div>
                  <hr/>
                  <div class="row">
                    <div class="col-lg-8">
                      <!-- Fasilitas Umum -->
                      <div class="row my-2">
                        <div class="col-lg-3">
                          <h6> Fasilitas Umum</h6>
                        </div>
                        <div class="col-lg-9">
                          <div class="row my-2">
                            <?php foreach ($f_umum as $f_umum) : ?>
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_umum->icon_fasilitas);?>" />&nbsp<?php echo $f_umum->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <!-- Fasilitas Ruang -->
                      <hr/>
                      <div class="row my-2">
                        <div class="col-lg-3">
                          <h6> Fasilitas Ruang</h6>
                        </div>
                        <div class="col-lg-9">
                          <div class="row my-2">
                            <?php foreach ($f_ruang as $f_ruang) : ?>
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_ruang->icon_fasilitas);?>" />&nbsp<?php echo $f_ruang->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <!-- Fasilitas mck -->
                      <hr/>
                      <div class="row my-2">
                        <div class="col-lg-3">
                          <h6> Fasilitas MCK</h6>
                        </div>
                        <div class="col-lg-9">
                          <div class="row my-2">
                            <?php foreach ($f_mck as $f_mck) : ?>
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_mck->icon_fasilitas);?>" />&nbsp<?php echo $f_mck->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <!-- Fasilitas parkir -->
                      <hr/>
                      <div class="row my-2">
                        <div class="col-lg-3">
                          <h6> Fasilitas Parkir</h6>
                        </div>
                        <div class="col-lg-9">
                          <div class="row my-2">
                            <?php foreach ($f_parkir as $f_parkir) : ?>
                            <div class="col-md-12 col-md-6">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_parkir->icon_fasilitas);?>" />&nbsp<?php echo $f_parkir->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <!-- Fasilitas lingkungan -->
                      <hr/>
                      <div class="row my-2">
                        <div class="col-lg-3">
                          <h6> Fasilitas Lingkungan</h6>
                        </div>
                        <div class="col-lg-9">
                          <div class="row my-2">
                            <?php foreach ($f_lingkungan as $f_lingkungan) : ?>
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_lingkungan->icon_fasilitas);?>" />&nbsp<?php echo $f_lingkungan->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                      <!-- Deskripsi Rumah-->
                      <hr/>
                     
                    </div> <!---/.col-lg-8 -->
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
                </div><!-- /.panel-body -->
              </div>
            </div>
          </div>
		    </div><!-- /container -->
		  </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>