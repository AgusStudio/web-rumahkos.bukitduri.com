<?php $this->load->view('admin/header');?>
<body onload="window.print()"> 
  <div id="wrapper"> 
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title text-center"><?php echo "Laporan Kunjungan ".$tipe." Periode: ".$date_first."-".$date_end;?></h4>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="table-rep-plugin">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal CekIn</th>
                      <th>Tanggal CekOut</th>
                      <th>Unit</th>
                      <th><?php echo "No ".$jenis;?></th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Tlp</th>
                      <th>Status Sewa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($penyewa as $penyewa): ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo date('d-m-Y H:i', strtotime($penyewa->cek_in));?></td>
                      <td><?php echo date('d-m-Y H:i', strtotime($penyewa->cek_out));?></td>
                      <td><?php echo $penyewa->nama_rumah;?></td>
                      <td><?php echo "0".$penyewa->$no_SubUnit;?></td>
                      <td><?php echo $penyewa->nama_user;?></td>
                      <td><?php echo $penyewa->alamat_user;?></td>
                      <td><?php echo $penyewa->tlp_user;?></td>
                      <td><?php if($penyewa->status_sewa=='1'){ echo "Aktif";}else{ echo "Tidak Aktif";} ?></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>