<?php $this->load->view('admin/header');?>
<body> 
  <div id="wrapper"> 
    <!-- Top Bar Start -->
    <?php $this->load->view('top_menu');?>
    <?php $this->load->view('sidebar');?>
		<div class="content-page"><!-- Start content -->
      <div class="content">
        <div class="container">
					<div class="row">
						<div class="col-sm-12">
              <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url('welcome/kelola_kos');?>">Home</a></li>
                <li class="active"><a href="<?php echo base_url('welcome/rumah_sewa/'.$detail->kategori_rumah);?>"><?php echo $kat; ?></a></li>
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
                      <div class="gal-detail thumb">
                        <button title="Edit Photo" class="close" data-toggle="modal" data-target="<?php echo $target;?>" onclick="<?php $picture= $detail->$pict;?>"><i class="fa fa-pencil"></i></button>
                        <a href="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" class="image-popup" title="Screenshot-1"><img class="img-fluid" width="100%" height="200" src="<?php if($detail->$pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$pict); }else{ echo "http://placehold.it/250x200"; }?>" alt="Image"></a>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <?php for($j=1;$j<=4;$j++){ $modal_pict= "foto_".$j; $id_target="PictProfile".$j; $id_preview="preview".$j; ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div id="<?php echo $id_target;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 class="modal-title text-center" id="myModalLabel">Foto Profile</h4>
                            </div>
                            <div class="modal-body">
                              <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                              <div class="form-group text-center">
                                  <img id="<?php echo $id_preview;?>" class="image fluid" width="250" height="200" src="<?php if($detail->$modal_pict!=""){ echo base_url('assets/img/rumah_kos/'.$detail->$modal_pict); }else{ echo "http://placehold.it/250x200"; }?>" alt="Image">
                              </div> 
                              <div class="form-group">
                                <input onchange="tampilkanPreview(this,'<?php echo $id_preview;?>')" type="file"  name="userfile" placeholder="Pilih foto">
                                <input type='text' name="foto_no" value="<?php echo $j;?>" hidden="hidden">
                                <input type='text' name="tipe" value="<?php echo $detail->kategori_rumah;?>" hidden="hidden">
                              </div> 
                            </div>
                            <div class="modal-footer">
                              <div class="form-group pull-right">
                                  <button name="pict_save" value="1" class="btn btn-primary" type="submit">Save</button>
                              </div>
                            </div>
                            <?php echo form_close();?>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                    </div>
                  </div>
                  <?php } ?>
                  <hr/>
                  <div class="row">
                    <div class="col-lg-10">
                      <!-- Fasilitas Umum -->
                      <div class="row my-2">
                        <div class="col-lg-4">
                          <h6> Fasilitas Umum</h6>
                        </div>
                        <div class="col-lg-8">
                          <div class="row my-2">
                            <?php foreach ($f_umum as $f_umum) : ?>
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_umum->icon_fasilitas);?>" />&nbsp<?php echo $f_umum->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12 m-t-5">
                              <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_umum"> Edit Fasilitas <i class="fa fa-plus-square"></i></button>
                            </div>
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
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_ruang->icon_fasilitas);?>" />&nbsp<?php echo $f_ruang->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12 m-t-5">
                              <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_ruang"> Edit Fasilitas <i class="fa fa-plus-square"></i></button>
                            </div>
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
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_mck->icon_fasilitas);?>" />&nbsp<?php echo $f_mck->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12 m-t-5">
                              <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_mck"> Edit Fasilitas <i class="fa fa-plus-square"></i></button>
                            </div>
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
                            <div class="col-md-12 col-md-6">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_parkir->icon_fasilitas);?>" />&nbsp<?php echo $f_parkir->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12 m-t-5">
                              <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_parkir"> Edit Fasilitas <i class="fa fa-plus-square"></i></button>
                            </div>
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
                            <div class="col-md-12 col-md-6 col-md-4">
                              <img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$f_lingkungan->icon_fasilitas);?>" />&nbsp<?php echo $f_lingkungan->nama_fasilitas;?>
                            </div>
                            <?php endforeach; ?>
                            <div class="col-md-12 m-t-5">
                              <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_lingkungan"> Edit Fasilitas <i class="fa fa-plus-square"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Deskripsi Rumah-->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Keterangan Lain</h6>
                        </div>
                        <div class="col-lg-8">  
                        <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?> 
                        <input type='text' name="foto_1" value="<?php echo $detail->foto_1;?>" hidden="hidden">
                        <input type='text' name="foto_2" value="<?php echo $detail->foto_2;?>" hidden="hidden">
                        <input type='text' name="foto_3" value="<?php echo $detail->foto_3;?>" hidden="hidden">
                        <input type='text' name="foto_4" value="<?php echo $detail->foto_4;?>" hidden="hidden"> 
                        <input type='text' name="tipe" value="<?php echo $detail->kategori_rumah;?>" hidden="hidden">
                          <?php if($kat=="Rumah Kos"){ ?>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="form-control"><b><?php echo "Jumlah ".$jml_kamar." Kamar";?></b></span>
                              <a class="input-group-addon" href="<?php echo base_url('welcome/'.$detail->kategori_rumah.'/'.$detail->id_rumah);?>" title="Klik untuk melihat unit kamar" > Unit Kamar <i class="fa fa-plus-square"></i></a>
                              <input type='text' name="jml_kamar" value="<?php echo $jml_kamar;?>" hidden="hidden">
                              <input type='text' name="kat" value="kamar" hidden="hidden"> 
                            </div>
                          </div>
                          <?php }else{ ?>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="form-control"><b><?php echo "Jumlah ".$jml_kamar." Rumah";?></b></span>
                              <a class="input-group-addon" href="<?php echo base_url('welcome/'.$detail->kategori_rumah.'/'.$detail->id_rumah);?>" title="Klik untuk melihat unit rumah" > Unit Rumah <i class="fa fa-plus-square"></i></a>
                              <input type='text' name="jml_kamar" value="<?php echo $jml_kamar;?>" hidden="hidden">
                              <input type='text' name="kat" value="rumah" hidden="hidden">
                            </div>
                          </div>
                          <?php } ?>     
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">No IMB</span>
                              <input type="text" class="form-control" value="<?php echo $detail->imb_rumah;?>" name="imb" placeholder="No IMB" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-2">
                        <div class="col-lg-4">
                          <h6> Harga Sewa</h6>
                        </div>
                        <div class="col-lg-8">   
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input class="form-control text-right" name="harga_perhari" value="<?php echo $detail->harga_perhari;?>" placeholder="Harga Per Hari">
                              <span class="input-group-addon">/Hari</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input class="form-control text-right" name="harga_perbulan" value="<?php echo $detail->harga_perbulan;?>" placeholder="Harga Per Bulan">
                              <span class="input-group-addon">/Bulan</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input class="form-control text-right" name="harga_pertahun" value="<?php echo $detail->harga_pertahun;?>" placeholder="Harga Per Tahun">
                              <span class="input-group-addon">/Tahun</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><img width="20" height="20" src="<?php echo base_url('assets/img/icons/listrik.png');?>"></span>
                              <select name="listrik" class="form-control">
                                <option <?php if($detail->listrik==1){ echo "selected='selected'"; } ?> value="1" >Sudah Termasuk Listrik</option>
                                <option <?php if($detail->listrik==0){ echo "selected='selected'"; } ?> value="0">Tidak termasuk Listrik</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-2">
                        <div class="col-lg-4">
                          <h6> Contact</h6>
                        </div>
                        <div class="col-lg-8">
                          <div class="form-group">
                            <textarea name="alamat" class="form-control"><?php echo $detail->alamat_rumah;?>
                            </textarea>
                            <div class="input-group m-t-5">
                              <span class="input-group-addon">RT / RW</span>
                              <select name="rt" class="form-control">
                                <?php foreach ($rt as $rt) : ?>
                                <option <?php if($detail->id_rt==$rt->id_rt){ echo "selected='selected'"; } ?> value="<?php echo $rt->id_rt;?>" ><?php echo $rt->rt." / ".$rt->rw;?></option>
                                <?php endforeach;?>
                              </select>
                            </div>
                          </div> 
                          <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" id="example-input1-group1" name="tlp" class="form-control" value="<?php echo $detail->tlp_rumah;?>" placeholder="Telephone" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
                                <input type="text" id="example-input1-group1" name="no_whatsapp" class="form-control" value="<?php echo $detail->no_whatsapp;?>" placeholder="No Whatsapp" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-2">
                        <div class="col-lg-4">
                          <h6> Deskripsi Rumah</h6>
                        </div>
                        <div class="col-lg-8">        
                          <div class="form-group">
                            <textarea name='deskripsi' class='wysihtml5 form-control' style='height: 200px'><?php echo $detail->deskripsi_rumah; ?></textarea>
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary pull-right" type="submit" name="ket_umum_save" value="1"> Save </button>
                          </div>
                          <?php echo form_close();?>
                        </div>
                      </div>
                    </div> <!---/.col-lg-8 -->
                    
                  </div>
                </div><!-- /.panel-body -->
              </div>
            </div>
          </div>
          <!-- modal fasilitas -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="edit_fas_umum" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel">Edit Fasilitas Umum</h4>
                    </div>
                    <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <?php foreach ($fasilitas_umum as $fasilitas_umum) : ?>
                          <div class="col-md-12 col-md-6 col-md-4">
                            <div class="form-group">
                              <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_umum->id_fasilitas;?>" value="<?php echo $fasilitas_umum->id_fasilitas;?>" ><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_umum->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_umum->nama_fasilitas;?>
                            </div>
                          </div>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="form-group pull-right">
                        <button name="fas_umum_save" value="1" class="btn btn-primary" type="submit">Save</button>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal fasilitas umum -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="edit_fas_ruang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel">Edit Fasilitas Ruang</h4>
                    </div>
                    <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <?php foreach ($fasilitas_ruang as $fasilitas_ruang) : ?>
                          <div class="col-md-12 col-md-6 col-md-4">
                            <div class="form-group">
                              <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_ruang->id_fasilitas;?>" value="<?php echo $fasilitas_ruang->id_fasilitas;?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_ruang->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_ruang->nama_fasilitas;?>
                            </div>
                          </div>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="form-group pull-right">
                        <button name="fas_ruang_save" value="1" class="btn btn-primary" type="submit">Save</button>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal fasilitas ruang -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="edit_fas_mck" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel">Edit Fasilitas MCK</h4>
                    </div>
                    <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <?php foreach ($fasilitas_mck as $fasilitas_mck) : ?>
                          <div class="col-md-12 col-md-6 col-md-4">
                            <div class="form-group">
                              <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_mck->id_fasilitas;?>" value="<?php echo $fasilitas_mck->id_fasilitas;?>" ><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_mck->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_mck->nama_fasilitas;?>
                            </div>
                          </div>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="form-group pull-right">
                        <button name="fas_mck_save" value="1" class="btn btn-primary" type="submit">Save</button>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal fasilitas MCK -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="edit_fas_parkir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel">Edit Fasilitas Parkir</h4>
                    </div>
                    <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <?php foreach ($fasilitas_parkir as $fasilitas_parkir) : ?>
                          <div class="col-md-12 col-md-6 col-md-4">
                            <div class="form-group"> 
                              <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_parkir->id_fasilitas;?>" value="<?php echo $fasilitas_parkir->id_fasilitas;?>" ><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_parkir->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_parkir->nama_fasilitas;?>
                            </div>
                          </div>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="form-group pull-right">
                        <button name="fas_parkir_save" value="1" class="btn btn-primary" type="submit">Save</button>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal fasilitas parkir -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="edit_fas_lingkungan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel">Edit Fasilitas Lingkungan</h4>
                    </div>
                    <?php echo form_open_multipart('welcome/edit_rumah/'.$detail->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <?php foreach ($fasilitas_lingkungan as $fasilitas_lingkungan) : ?>
                          <div class="col-md-12 col-md-6 col-md-4">
                            <div class="form-group">
                              <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_lingkungan->id_fasilitas;?>" value="<?php echo $fasilitas_lingkungan->id_fasilitas;?>" ><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_lingkungan->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_lingkungan->nama_fasilitas;?>
                            </div>
                          </div>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <div class="form-group pull-right">
                        <button name="fas_lingkungan_save" value="1" class="btn btn-primary" type="submit">Save</button>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal fasilitas lingkungan -->
		    </div><!-- /container -->
		  </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>