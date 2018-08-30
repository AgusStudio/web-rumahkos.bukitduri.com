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
                <li class="active"><?php if($tipe=="Rumah_Kos"){ $kat="Rumah Kos"; $table="view_kos"; echo $kat; }else{ $kat="Kontrakan"; $table="view_kontrakan"; echo $kat; } ?></li>
              </ol>
            </div>
					</div>
					<!-- Start Widget -->
					<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $kat; ?> <span class="pull-right"><a href="<?php echo base_url('welcome/tambah_rumah/'.$tipe);?>" class="text-white" ><i class="fa fa-plus-square"> Tambah</i></a></span></h3>
                </div>
                <div class="panel-body" style="overflow: auto">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>IMB rumah</th>
                            <th>Harga Perhari</th>
                            <th>Harga Perbulan</th>
                            <th>Harga Pertahun</th>
                            <th>Tanggal Update</th>
                            <th>Unit Kosong</th>
                            <th>Status Unit</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($rumah_sewa as $rumah_sewa): $id_rumah=$rumah_sewa->id_rumah; ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $rumah_sewa->nama_rumah;?></td>
                            <td><?php echo $rumah_sewa->alamat_rumah;?></td>
                            <td><?php echo $rumah_sewa->imb_rumah;?></td>
                            <td><?php echo number_format($rumah_sewa->harga_perhari,0,',','.');?></td>
                            <td><?php echo number_format($rumah_sewa->harga_perbulan,0,',','.');?></td>
                            <td><?php echo number_format($rumah_sewa->harga_pertahun,0,',','.');?></td>
                            <td><?php echo date('d/m/Y', strtotime($rumah_sewa->tgl_update));?></td>
                            <td><?php if($tipe=="Rumah_Kos"){ ?>
                              <a href="<?php echo base_url('welcome/Rumah_Kos/'.$id_rumah);?>" target="_blank" title="Klik untuk lihat daftar kamar"><?php echo $this->Model_kos->three_where('kamar_kos','id_rumah',$id_rumah,'status_kamar','0','status_aktif_kamar','1')->num_rows()." Kamar Kosong";?></a>
                            <?php }else{ ?>
                              <a href="<?php echo base_url('welcome/Kontrakan/'.$id_rumah);?>" target="_blank" title="Klik untuk lihat daftar kontrakan"><?php echo $this->Model_kos->three_where('rumah_kontrakan','id_rumah',$rumah_sewa->id_rumah,'status_kontrakan','0','status_aktif_kontrakan','1')->num_rows()." Rumah Kosong";?></a>
                            <?php } ?></td>
                            <td><?php if($rumah_sewa->status_rumah=='1'){ echo "<a href='#' title='Rumah sudah terposting'>Published</a>"; }else{ ?> <a href="<?php echo base_url('welcome/publish/'.$tipe.'/'.$rumah_sewa->id_rumah);?>" title="Klik untuk posting rumah">Un Publish</a><?PHP } ?></td>
                            <td><a href="<?php echo base_url('welcome/detail_rumah/'.$rumah_sewa->id_rumah);?>"><i class="fa fa-pencil"></i></a>&nbsp|&nbsp<a href="" data-target="#hapus_rumah" data-toggle="modal" onclick="javascript:
                            hapus_rumah.id_rumah.value= '<?php echo $rumah_sewa->id_rumah;?>'"><i class="fa fa-trash"></i></a></td>
                          </tr>
                        <?php endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>       
                </div>
              </div>
            </div> <!-- col -->
          </div> <!-- row-->
          <!--Modal Hapus unit-->
          <div class="row">
            <div class="col-md-12 col-md-6 col-md-4">
              <div id="hapus_rumah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form name="hapus_rumah" method="POST" action="<?php echo base_url('welcome/hapus_rumah/'.$tipe);?>">
                    <div class="modal-body">
                      <div class="row">
                        <input type="text" name="id_rumah" hidden="hidden">
                        <div class="form-group text-center">
                          <h2>Apakah Anda yakin?<br/><h4>Seluruh data record rumah dan propertinya juga akan terhapus</h4></h2>
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
          </div><!--/.modal fasilitas umum -->
  			</div><!-- /container -->
  		</div><!-- /contain -->
  	</div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>