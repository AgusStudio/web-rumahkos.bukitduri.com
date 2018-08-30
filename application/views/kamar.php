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
								<li><a href="#">Home</a></li>
								<li><a href="<?php echo base_url('welcome/rumah_sewa/'.$rumah_sewa->kategori_rumah);?>"><?php echo $tipe;?></a></li>
                <li class="active"><?php echo $rumah_sewa->nama_rumah;?></li>
							</ol>
						</div>
					</div>
					<!-- Start Widget -->
        <?php if($jml==0){ ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $jenis." ".$rumah_sewa->nama_rumah." ( ".$jml." ) ".$jenis; ?> <span class="pull-right"><i style="cursor: pointer" data-toggle="modal" data-target="#AddKamar" class="fa fa-plus-square"> Tambah</i></span></h3>
                </div>
                <div class="panel-body"> 
                  <div class="row"><h4>Keterangan kamar dan jumlah kamar belum tersedia. Segera lengkapi data kamar <i style='cursor: pointer' data-toggle='modal' data-target='#AddKamar' class='fa fa-plus-square'> Tambah</i></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }else{ ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $jenis." ".$rumah_sewa->nama_rumah." ( ".$jml." ) ".$jenis; ?> <span class="pull-right"><i style="cursor: pointer" data-toggle="modal" data-target="#AddKamar" class="fa fa-plus-square"> Tambah</i></span></h3>
                </div>
                <div class="panel-body">
                <?php foreach($kamar as $kamar2): ?>
                  <div class="col-md-12 col-md-6 col-md-4">
                  <?php if($kamar2->$status==1){ ?>
                    <img width="35" height="35" src="<?php echo base_url('assets/img/icons/kamar.png');?>" style="margin:0px"/>&nbsp
                      <div class="btn-group dropdown m-b-10 m-r-10">
                        <button type="button" class="btn btn-default waves-effect"><?php echo "0".$kamar2->$no;?> Berpenghuni</button>
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a title="Lihat Data Penghuni" data-toggle="modal" data-target="<?php echo '#Penghuni'.$kamar2->$id_unit;?>" >Lihat Data Penghuni</a></li>
                            <li><a title="Tambah Data Penghuni" data-toggle="modal" data-target="<?php echo '#AddPenghuni'.$kamar2->$id_unit;?>" >Tambah Data Penghuni</a></li>
                            <li><a title="Hapus Unit" data-toggle="modal" data-target="#hapus_unit" onclick="javascript:
                        hapus_unit.id_unit.value= '<?php echo $kamar2->$id_unit;?>';
                        "><i class="fa fa-trash"></i><?php echo " Hapus ".$jenis;?></a></li>
                        </ul>
                      </div>
                    <?php }else{ ?>
                      <img width="35" height="35" src="<?php echo base_url('assets/img/icons/kamar.png');?>" style="margin:0px" />&nbsp
                      <div class="btn-group dropdown m-b-10 m-r-10">
                        <button type="button" class="btn btn-default waves-effect"><?php echo "0".$kamar2->$no;?> Kosong</button>
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li class="text-center"><b>Tambahkan Penyewa</b></li>
                            <li class="divider"></li>
                            <li><a title="Tambah Penyewa" data-toggle="modal" data-target="#sewa" onclick="javascript:
                            sewa.id_unit.value= '<?php echo $kamar2->$id_unit;?>';
                            sewa.no_unit.value= '<?php echo $kamar2->$no;?>';">Sudah Punya Akun</a></li>
                            <li><a title="Tambah Penyewa" data-toggle="modal" data-target="#SewaUnAkun" onclick="javascript:
                            sewa_un_akun.id_unit.value= '<?php echo $kamar2->$id_unit;?>';
                            sewa_un_akun.no_unit.value= '<?php echo $kamar2->$no;?>';">Belum Punya Akun</a></li>
                            <li><a title="Hapus Unit" data-toggle="modal" data-target="#hapus_unit" onclick="javascript:
                        hapus_unit.id_unit.value= '<?php echo $kamar2->$id_unit;?>';
                        "><i class="fa fa-trash"></i><?php echo " Hapus ".$jenis;?></a></li>
                        </ul>
                      </div>
                    <?php } ?>
                  </div>
                 <?php endforeach; }
                 foreach($kamar as $kamar): $penghuni= $this->Model_kos->two_where($sewa_unit,$id_unit,$kamar->$id_unit,'status_sewa','1')->row(); ?>
                 <div id="<?php echo 'Penghuni'.$kamar->$id_unit;?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content"> 
                        <div class="modal-header text-center"><h4>Data Penghuni<br/><h5>Terdapat <?php echo $penghuni->jml_penghuni." Orang";?><br/><b class="pull-left"><?php echo $rumah_sewa->nama_rumah;?></b><b class="pull-right"><?php echo "No ".$jenis.": 0".$penghuni->$no;?></b></h5></h4></div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Nama Penyewa</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php if($penghuni->jk_user=="Laki-Laki"){ echo "Bapak ".$penghuni->nama_user;}else{ echo "Ibu ".$penghuni->nama_user;} ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Jenis Kelamin</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo $penghuni->jk_user; ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Alamat</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo $penghuni->alamat_user; ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Tlp</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo $penghuni->tlp_user; ?></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Email</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php $penghuni->email_user; ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>No <?php echo $penghuni->kartu_identitas;?></label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php if($penghuni->kartu_identitas=="KTP"){ echo $penghuni->ktp_user;}elseif ($penghuni->kartu_identitas=="KITAS"){ echo $penghuni->kitas_user;}else{ echo $penghuni->paspor_user;} ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>No Kartu Keluarga</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo $penghuni->no_kk_user; ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Cek In</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo date('d/m/Y',strtotime($penghuni->cek_in)); ?></span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <label>Cek Out</label>
                                </div>
                                <div class="col-sm-8">
                                  <span>: <?php echo date('d/m/Y',strtotime($penghuni->cek_out)); ?></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" disabled value="<?php echo $penghuni->keterangan_penghuni;?>"></textarea>
                            </div>
                             <div class="col-md-12">
                              <?php if($penghuni->jml_penghuni>1){ ?>
                              <table class="table table-striped">
                                <thead><tr><th colspan="3" class="text-center">Data Penghuni Lain</th></tr></thead>
                                <tbody>
                                  <tr><th>Nama Penghuni</th><th>KTP</th><th>Alamat</th><th></th></tr>
                                  <?php $penghuni_lain= $this->Model_kos->two_where($penghuni_unit,$id_sewa,$penghuni->$id_sewa,$id_unit,$penghuni->$id_unit)->result();
                                  foreach($penghuni_lain as $penghuni_lain): ?>
                                  <tr><td><?php echo $penghuni_lain->nama_penghuni_lain;?></td><td><?php echo $penghuni_lain->ktp_penghuni_lain;?></td><td><?php echo $penghuni_lain->alamat_penghuni_lain;?></td><td><a href="<?php echo base_url('welcome/hapus_penghuni/'.$rumah_sewa->kategori_rumah.'/'.$penghuni->$id_sewa.'/'.$penghuni_lain->$id_penghuni_lain.'/'.$rumah_sewa->id_rumah);?>" title="Klik untuk hapus" onclick="return confirm('Apakah anda yakin? Data penghuni akan terhapus');"><i class="fa fa-trash"></i></a></td></tr>
                                <?php endforeach;?>
                                </tbody>
                              </table>
                              <?php } ?>
                            </div>
                            <div class="form-group">
                              <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary pull-left" type="button">Close</button>
                            </div>
                            <div class="form-group">
                              <form action="<?php echo base_url('welcome/putus_sewa/'.$rumah_sewa->kategori_rumah);?>" method="POST" onsubmit="return confirm('Apakah Anda yakin? Putus sewa akan membebaskan penyewa dari kontrak sewa');">
                                <input type='text' name="id_sewa" value="<?php echo $penghuni->$id_sewa;?>" hidden="hidden">
                                <input type='text' name="id_rumah" value="<?php echo $rumah_sewa->id_rumah;?>" hidden="hidden">
                                <button class="btn btn-danger pull-right" type="submit">Putus Sewa</button>
                              </form>
                            </div>
                          </div>
                        </div> 
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  <!--Modal PENGHUNI-->
                    <div id="<?php echo 'AddPenghuni'.$kamar->$id_unit;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="row">
                              <form action="<?php echo base_url('welcome/addpenghuni/'.$rumah_sewa->kategori_rumah);?>" name="FormPenghuni" method="POST" onsubmit="return validasi_form()">
                              <table class='table'>
                                 <thead>
                                  <tr><th colspan='3' class='text-center'>Data Penghuni Lain Selain Penyewa<br><b class='pull-left'><?php echo $rumah_sewa->nama_rumah;?></b><b class="pull-right"><?php echo "No ".$jenis.": 0".$penghuni->$no;?></b></th></tr>
                                </thead>
                                <tbody>
                                  <tr><th>Nama Penghuni</th><th>KTP</th><th>Alamat</th></tr>
                                  <?php for($i=1;$i<=4;$i++){ ?>
                                  <tr>
                                    <td><input id="id1" type='text' name="<?php echo 'nama_penghuni_lain'.$i;?>" placeholder='Nama Penghuni' class='form-control'></td>
                                    <td><input id="id2" type='text' name="<?php echo 'ktp_penghuni_lain'.$i;?>" placeholder='No KTP' class='form-control'></td>
                                    <td><input id="id3" type='text' name="<?php echo 'alamat_penghuni_lain'.$i;?>" placeholder='Alamat' class='form-control'></td>
                                  </tr>
                                  <?php } ?>
                                  <input type='text' name="id_sewa" value="<?php echo $penghuni->$id_sewa;?>" hidden="hidden">
                                  <input type='text' name="id_unit" value="<?php echo $penghuni->$id_unit;?>" hidden="hidden">
                                  <input type='text' name="id_rumah" value="<?php echo $rumah_sewa->id_rumah;?>" hidden="hidden">
                                </tbody>
                              </table>
                              <div class="form-group">
                                <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary pull-left" type="button">Cancel</button>
                              </div>
                              <div class="form-group">
                                <button name="ok_btn" value="1" class="btn btn-primary pull-right" type="submit">Ok</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal --> 
                <?php endforeach;?>
               </div><!--Panel Body-->
              </div><!--Panel Primary-->
            </div><!--Panel Col-->
          </div><!--Panel Row-->
          <!-- modal AddKamar -->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="AddKamar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title text-center" id="myModalLabel"><?php echo "Tambah ".$jenis;?></h4>
                    </div>
                    <?php echo form_open_multipart('welcome/'.$add.'/'.$rumah_sewa->id_rumah);?>
                    <div class="modal-body">
                      <div class="row">
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <h6><?php echo "No ".$jenis;?></h6>
                          </div>
                          <div class="col-lg-8">
                            <input type="number" class="form-control" name="no_rumah" placeholder="<?php echo "No ".$jenis;?>" required>
                          </div>
                        </div>
                        <?php if($rumah_sewa->kategori_rumah=="Kontrakan"){ ?>
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <h6>Jumlah Kamar</h6>
                          </div>
                          <div class="col-lg-8">
                            <input type="number" class="form-control" name="jml_kamar" placeholder="Jumlah Kamar" required>
                          </div>
                        </div>
                        <?php } ?>
                        <div class="row form-group">
                          <button name="save_btn" value="1" class="btn btn-primary pull-right" type="submit">Save</button>
                        </div>
                      </div>
                    </div>
                    <?php echo form_close();?>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
          <!--Modal Hapus unit-->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="hapus_unit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form name="hapus_unit" method="POST" action="<?php echo base_url('welcome/hapus_unit/'.$rumah_sewa->kategori_rumah);?>">
                    <div class="modal-body">
                      <div class="row">
                        <input type="text" name="id_unit" hidden="hidden">
                        <input type="text" name="id_rumah" value="<?php echo $rumah_sewa->id_rumah;?>" hidden="hidden">
                        <div class="form-group text-center">
                          <h2>Apakah Anda yakin?<br/><h4>Jika unit ini dihapus seluruh data record penghuni unit ini juga terhapus</h4></h2>
                        </div>
                        <div class="form-group">
                          <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary pull-left" type="button">Cancel</button>
                        </div>
                        <div class="form-group">
                          <button name="ok_btn" value="1" class="btn btn-primary pull-right" type="submit">Ok</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal hapus unit -->
          <!--Modal Sewa-->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="sewa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form action="<?php echo base_url('welcome/sewabyakun/'.$rumah_sewa->kategori_rumah);?>" method="POST" name="sewa">
                    <div class="modal-header"><h3 class="text-center"><?php echo $rumah_sewa->nama_rumah;?></h3></div>
                    <div class="modal-body">
                      <div class="row">
                        <input type="text" name="id_unit" hidden="hidden">
                        <input type="text" name="id_rumah" value="<?php echo $rumah_sewa->id_rumah;?>" hidden="hidden">
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label><?php echo "No ".$jenis;?></label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="no_unit" placeholder="No Unit" disabled>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>Username Penyewa</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="email" class="form-control" name="username" placeholder="name@example.com" required>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>Password</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>Tanggal Cek In</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" id="datepicker" class="form-control" name="tgl_cekin" placeholder="<?php echo date('m/d/Y');?>" required>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>Tanggal Cek Out</label>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" id="datepicker1" class="form-control" name="tgl_cekout" placeholder="<?php echo date('m/d/Y');?>" required>
                          </div>
                        </div> 
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>Jenis Sewa</label>
                          </div> 
                          <div class="col-lg-8">
                            <select class="form-control" name="jenis_sewa" required>
                              <?php if($rumah_sewa->harga_perhari!="0"){ echo "<option> Harian </option>"; }?>
                              <?php if($rumah_sewa->harga_perbulan!="0"){ echo "<option> Bulanan </option>"; }?>
                              <?php if($rumah_sewa->harga_pertahun!="0"){ echo "<option> Tahunan </option>"; }?>
                            </select>
                          </div>
                        </div> 
                        <div class="row form-group">
                          <div class="col-lg-4">
                            <label>keterangan penghuni</label>
                          </div>
                          <div class="col-lg-8">
                            <textarea name="keterangan" class='wysihtml5 form-control' placeholder="Keterangan tentang penghuni"></textarea>
                          </div>
                        </div>  
                        <div class="form-group">
                          <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary pull-left" type="button">Cancel</button>
                        </div>
                        <div class="form-group">
                          <button name="ok_btn" value="1" class="btn btn-primary pull-right" type="submit">Ok</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div><!--/.modal penghuni -->
          <!--Modal SewaUnAkun-->
          <div class="row">
            <div id="SewaUnAkun" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="<?php echo base_url('welcome/sewaunakun/'.$rumah_sewa->kategori_rumah);?>" method="POST" name="sewa_un_akun" onsubmit="return validasi_sewaunakun(this)">
                  <div class="modal-header"><h3 class="text-center"><?php echo $rumah_sewa->nama_rumah;?></h3></div>
                  <div class="modal-body">
                    <div class="row">
                      <input type="text" name="id_unit" hidden="hidden">
                      <input type="text" name="id_rumah" value="<?php echo $rumah_sewa->id_rumah;?>" hidden="hidden">
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label><?php echo "No ".$jenis;?></label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="no_unit" placeholder="No Unit" disabled>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Username</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="email" class="form-control" name="username" placeholder="name@example.com" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Password</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Konfirmasi Password</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" name="konfm_password" placeholder="Konfirmasi Password" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Nama penyewa</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nama" placeholder="nama" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-8">
                          <select name="jk" class="form-control" required>
                            <option value="Laki-Laki"> Laki-Laki</option>
                            <option value="Perempuan"> Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Alamat</label>
                        </div>
                        <div class="col-lg-8">
                          <textarea name="alamat" placeholder="Alamat sesuai KTP" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Telephone</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="tlp" placeholder="Telephone" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Email</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Kartu Identitas</label>
                        </div>
                        <div class="col-lg-8">
                          <select name="kartu_identitas" class="form-control" required onclick="javascript:
                      var val = sewa_un_akun.kartu_identitas.value;
                      if(val=='KTP'){
                        displayktp();
                      }else if (val=='KITAS'){
                        displaykitas();
                      }else if(val=='PASPOR'){
                        displaypaspor();
                      }">
                            <option value="">Pilih Jenis Kartu Identitas</option>
                            <option value="KTP">KTP</option>
                            <option value="KITAS">KITAS</option>
                            <option value="PASPOR">PASPOR</option>
                          </select>
                          <div id="ktp_input"></div>
                          <div id="kitas_input"></div>
                          <div id="paspor_input"></div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Kartu Keluarga</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="kk" placeholder="No Kartu Keluarga" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Tanggal Cek In</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" id="datepicker2" class="form-control" name="tgl_cekin" placeholder="<?php echo date('m/d/Y');?>" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Tanggal Cek Out</label>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" id="datepicker3" class="form-control" name="tgl_cekout" placeholder="<?php echo date('m/d/Y');?>" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>Jenis Sewa</label>
                        </div> 
                        <div class="col-lg-8">
                          <select class="form-control" name="jenis_sewa" required>
                            <?php if($rumah_sewa->harga_perhari!="0"){ echo "<option value='Harian'> Harian </option>"; }?>
                            <?php if($rumah_sewa->harga_perbulan!="0"){ echo "<option value='Bulanan'> Bulanan </option>"; }?>
                            <?php if($rumah_sewa->harga_pertahun!="0"){ echo "<option value='Tahunan'> Tahunan </option>"; }?>
                          </select>
                        </div>
                      </div> 
                      <div class="row form-group">
                        <div class="col-lg-4">
                          <label>keterangan penghuni</label>
                        </div>
                        <div class="col-lg-8">
                          <textarea name="keterangan" class='wysihtml5 form-control' placeholder="Keterangan tentang penghuni"></textarea>
                        </div>
                      </div>  
                      <div class="form-group">
                        <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary pull-left" type="button">Cancel</button>
                      </div>
                      <div class="form-group">
                        <button name="ok_btn" value="1" class="btn btn-primary pull-right" type="submit">Ok</button>
                      </div>
                    </div>
                  </div>        
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!--/.modal penghuni -->
      	</div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
  <script type="text/javascript">
  function displayktp() {
    document.getElementById('ktp_input').innerHTML = "<div class='m-t-5'><input type='text' class='form-control' name='ktp' placeholder='No KTP'></div>";
    document.getElementById('kitas_input').innerHTML ='';
    document.getElementById('paspor_input').innerHTML ='';
  }
  function displaykitas() {
    document.getElementById('kitas_input').innerHTML = "<div class='m-t-5'><input type='text' class='form-control' name='kitas' placeholder='No KITAS'></div>";
    document.getElementById('ktp_input').innerHTML ='';
    document.getElementById('paspor_input').innerHTML ='';
  }
  function displaypaspor() {
    document.getElementById('paspor_input').innerHTML = "<div class='m-t-5'><input type='text' class='form-control' name='paspor' placeholder='No PASPOR'></div>";
    document.getElementById('kitas_input').innerHTML ='';
    document.getElementById('ktp_input').innerHTML ='';
  }
  function validasi_form() {
    var x;
    for(x=1;x<=4;x++){
      var val_nama= document.getElementById('id1').value;
      var val_ktp= document.getElementById('id2').value;
      var val_alamat= document.getElementById('id3').value;
      if(val_nama=="" && val_ktp=="" && val_alamat==""){
        alert('Tidak Ada data yang terinput!');
        return false;
      }else{
        return true;
      }
    }
  }
  function validasi_sewaunakun(form) {
    var val_pass= form.password.value;
    var val_repass= form.konfm_password.value;
    if(val_pass!=val_repass){
      alert('Password dan Konfirmasi Password tidak sesuai!');
      form.password.focus();
      return false;
    }else{
      return true;
    }
  }
  </script>
  <?php $this->load->view('admin/footer');?>