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
                <li class="active"><a href="<?php echo base_url('welcome/kritik');?>">Kritik</a></li>
              </ol>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Pelaporan Pelanggaran</h3>
                </div>
                <div class="panel-body" style="overflow: auto">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Unit Rumah</th>
                            <th>Pelanggaran</th>
                            <th>Deskripsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($pelanggaran as $pelanggaran): ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo date('d-m-Y',strtotime($pelanggaran->tgl_laporan));?></td>
                            <td><?php echo $pelanggaran->nama_rumah;?></td>
                            <td><?php if($pelanggaran->foto_unmatch=='1'){ echo "+ Foto Unit tidak sesuai pada iklan<br/>";}
                            if($pelanggaran->alamat_unmatch=='1'){ echo "+ Alamat lengkap tidak sesuai pada iklan<br/>";}
                            if($pelanggaran->tlp_unmatch=='1'){ echo "+ No Telephone tidak bisa dihubungi<br/>";} 
                            if($pelanggaran->harga_unmatch=='1'){ echo "+ Harga Sewa tidak sesuai pada iklan<br/>";}
                            if($pelanggaran->fasilitas_unmatch=='1'){ echo "+ Fasilitas tidak sesuai pada iklan<br/>";} ?></td>
                            <td><?php echo $pelanggaran->isi_laporan;?></td>
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
          </div>
          </div>
        </div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>