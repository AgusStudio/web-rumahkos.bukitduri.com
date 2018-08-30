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
                <li class="active">Rumah Sewa</li>
              </ol>
            </div>
					</div>
					<!-- Start Widget -->
					<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo "Daftar Rumah Sewa Bukit Duri ".$tipe;?></h3>
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
                            <th>Jml Sub Unit</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($rumah_sewa as $rumah_sewa): ?>
                          <tr onclick="window.location='<?php echo base_url();?>admin/detail_rumah/<?php echo $rumah_sewa->id_rumah;?>/<?php echo $rumah_sewa->kategori_rumah;?>'" style="cursor: pointer" title="Klik untuk lihat detai">
                            <td><?php echo $no++;?></td>
                            <td><?php echo $rumah_sewa->nama_rumah;?></td>
                            <td><?php echo $rumah_sewa->alamat_rumah;?></td>
                            <td><?php echo $rumah_sewa->imb_rumah;?></td>
                            <td><?php echo number_format($rumah_sewa->harga_perhari,0,',','.');?></td>
                            <td><?php echo number_format($rumah_sewa->harga_perbulan,0,',','.');?></td>
                            <td><?php echo number_format($rumah_sewa->harga_pertahun,0,',','.');?></td>
                            <td><?php echo date('d/m/Y', strtotime($rumah_sewa->tgl_update));?></td>
                            <td><?php if($rumah_sewa->kategori_rumah=="Rumah_Kos"){ echo $this->Model_kos->two_where('kamar_kos','id_rumah',$rumah_sewa->id_rumah,'status_aktif_kamar','1')->num_rows()." Kamar";
                              }else{ echo $this->Model_kos->two_where('rumah_kontrakan','id_rumah',$rumah_sewa->id_rumah,'status_aktif_kontrakan','1')->num_rows()." Rumah"; } ?></td>
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
  			</div><!-- /container -->
  		</div><!-- /contain -->
  	</div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>