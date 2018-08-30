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
								<li class="active"><a href="<?php echo base_url('welcome/rumah_sewa/'.$tipe);?>"><?php echo $kat; ?></a></li>
							</ol>
						</div>
					</div>
					<!-- Start Widget -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <?PHP echo form_open_multipart('welcome/add_rumah');?>
              <input type='text' name="tipe" value="<?php echo $tipe;?>" hidden="hidden">
              <input type='text' name="id_user" value="<?php echo $user->id_user;?>" hidden="hidden">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title text-center"><input type="text" name="nama_rumah" class="form-control text-center" placeholder="Nama Rumah" required></h4>
                </div>
                <div class="panel-body"><!-- Panel-body-->
                  <div class="row">
                    <div class="col-lg-10">
                      <!-- Fasilitas Umum -->
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Fasilitas Umum</h6>
                        </div>
                        <div class="col-lg-8">
                          <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_umum" type="button"> Tambah Fasilitas <i class="fa fa-plus-square"></i></button>
                        </div>
                      </div>
                      <div class="row"><!-- modal fasilitas umum -->
                        <div class="col-md-12 col-md-6 col-md-4">
                          <div id="edit_fas_umum" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Fasilitas Umum</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <?php foreach ($fasilitas_umum as $fasilitas_umum) : ?>
                                      <div class="col-md-12 col-md-6 col-md-4">
                                        <div class="form-group">
                                          <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_umum->id_fasilitas;?>" value="<?php echo $fasilitas_umum->id_fasilitas; ?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_umum->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_umum->nama_fasilitas;?>
                                        </div>
                                      </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save</button>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                      <!-- Fasilitas Ruang -->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Fasilitas Ruang</h6>
                        </div>
                        <div class="col-lg-8">
                          <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_ruang"  type="button"> Tambah Fasilitas <i class="fa fa-plus-square"></i></button>
                        </div>
                      </div>
                      <div class="row"><!--modal fasilitas ruang -->
                        <div class="col-md-12 col-md-6 col-md-4">
                          <div id="edit_fas_ruang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Fasilitas Ruang</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <?php foreach ($fasilitas_ruang as $fasilitas_ruang) : ?>
                                      <div class="col-md-12 col-md-6 col-md-4">
                                        <div class="form-group">
                                          <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_ruang->id_fasilitas;?>" value="<?php echo $fasilitas_ruang->id_fasilitas; ?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_ruang->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_ruang->nama_fasilitas;?>
                                        </div>
                                      </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save</button>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                      <!-- Fasilitas mck -->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Fasilitas MCK</h6>
                        </div>
                        <div class="col-lg-8">
                          <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_mck" type="button"> Tambah Fasilitas <i class="fa fa-plus-square"></i></button>
                        </div>
                      </div>
                      <div class="row"><!--modal fasilitas MCK -->
                        <div class="col-md-12 col-md-6 col-md-4">
                          <div id="edit_fas_mck" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Fasilitas MCK</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <?php foreach ($fasilitas_mck as $fasilitas_mck) : ?>
                                      <div class="col-md-12 col-md-6 col-md-4">
                                        <div class="form-group">
                                          <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_mck->id_fasilitas;?>" value="<?php echo $fasilitas_mck->id_fasilitas; ?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_mck->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_mck->nama_fasilitas;?>
                                        </div>
                                      </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save</button>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                      <!-- Fasilitas parkir -->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Fasilitas Parkir</h6>
                        </div>
                        <div class="col-lg-8">
                          <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_parkir" type="button"> Tambah Fasilitas <i class="fa fa-plus-square"></i></button>
                        </div>
                      </div>
                      <div class="row"><!--modal fasilitas parkir -->
                        <div class="col-md-12 col-md-6 col-md-4">
                          <div id="edit_fas_parkir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Fasilitas Parkir</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <?php foreach ($fasilitas_parkir as $fasilitas_parkir) : ?>
                                      <div class="col-md-12 col-md-6 col-md-4">
                                        <div class="form-group">
                                          <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_parkir->id_fasilitas;?>" value="<?php echo $fasilitas_parkir->id_fasilitas; ?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_parkir->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_parkir->nama_fasilitas;?>
                                        </div>
                                      </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save</button>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                      <!-- Fasilitas lingkungan -->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Fasilitas Lingkungan</h6>
                        </div>
                        <div class="col-lg-8">
                          <button class="btn btn-default" data-toggle="modal" data-target="#edit_fas_lingkungan" type="button"> Tambah Fasilitas <i class="fa fa-plus-square"></i></button>
                        </div>
                      </div>
                      <div class="row"><!--modal fasilitas lingkungan -->
                        <div class="col-md-12 col-md-6 col-md-4">
                          <div id="edit_fas_lingkungan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title text-center" id="myModalLabel">Tambah Fasilitas Lingkungan</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <?php foreach ($fasilitas_lingkungan as $fasilitas_lingkungan) : ?>
                                      <input type="text" value="<?php echo $user->id_user;?>" name="user" hidden="hidden">
                                      <div class="col-md-12 col-md-6 col-md-4">
                                        <div class="form-group">
                                          <input type="checkbox" name="<?php echo 'fas_'.$fasilitas_parkir->id_fasilitas;?>" value="<?php echo $fasilitas_lingkungan->id_fasilitas; ?>"><img width="30" height="30" src="<?php echo base_url('assets/img/icons/'.$fasilitas_lingkungan->icon_fasilitas);?>" />&nbsp<?php echo $fasilitas_lingkungan->nama_fasilitas;?>
                                        </div>
                                      </div>
                                    <?php endforeach;?>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-group pull-right">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save</button>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                      <!-- Deskripsi Rumah-->
                      <hr/>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Keterangan Lain</h6>
                        </div>
                        <div class="col-lg-8">       
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">No IMB</span>
                              <input type="text" class="form-control" name="imb" placeholder="No IMB" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Harga Sewa</h6>
                        </div>
                        <div class="col-lg-8">       
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input type="number" class="form-control text-right" name="harga_perhari" placeholder="Harga Per Hari">
                              <span class="input-group-addon">/Hari</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input type="number" class="form-control text-right" name="harga_perbulan" placeholder="Harga Per Bulan">
                              <span class="input-group-addon" required>/Bulan</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon">Rp.</span>
                              <input type="number" class="form-control text-right" name="harga_pertahun" placeholder="Harga Per Tahun">
                              <span class="input-group-addon">/Tahun</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><img width="20" height="20" src="<?php echo base_url('assets/img/icons/listrik.png');?>"></span>
                              <select name="listrik" class="form-control" required>
                                <option value="1" >Sudah Termasuk Listrik</option>
                                <option value="0">Tidak termasuk Listrik</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Contact</h6>
                        </div>
                        <div class="col-lg-8">       
                          <div class="form-group">
                            <textarea name="alamat" class="form-control" placeholder="<?php echo 'Alamat Rumah '.$kat.' Anda';?>"></textarea>
                            <div class="input-group m-t-5">
                              <span class="input-group-addon">RT / RW</span>
                              <select name="rt" class="form-control" required>
                                <?php foreach ($rt as $rt) : ?>
                                <option value="<?php echo $rt->id_rt;?>" ><?php echo $rt->rt." / ".$rt->rw;?></option>
                                <?php endforeach;?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" id="example-input1-group1" name="tlp" class="form-control" placeholder="Telephone" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
                                <input type="text" id="example-input1-group1" name="no_whatsapp" class="form-control" placeholder="No Whatsapp" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <h6> Deskripsi Rumah</h6>
                        </div>
                        <div class="col-lg-8">       
                          <div class="form-group">
                            <textarea name='deskripsi' class='wysihtml5 form-control' style='width: 100%; height: 200px' placeholder="<?php echo 'Deskripsikan Rumah '.$kat.' Anda';?>"></textarea>
                          </div>
                          <div class="form-group pull-right">
                            <button name="submit" value="1" class="btn btn-primary pull-right" type="submit">Save</button>
                          </div>
                        </div>      
                      </div>
                    </div> <!---/.col-lg-10 -->
                  </div>
                </div><!-- /.panel-body -->
              </div>
              <?PHP echo form_close(); ?>
            </div>
          </div>
		    </div><!-- /container -->
		  </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>