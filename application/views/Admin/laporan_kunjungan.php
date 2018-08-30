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
                <li><a href="<?php echo base_url('welcome/kelola_kos');?>">Home</a></li>
                <li class="active"><a href="<?php echo base_url('welcome/laporan_kunjungan/'.$tipe);?>">Laporan</a></li>
              </ol>
            </div>
          </div>
          <!-- Start Widget -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title text-center"><?php echo "Laporan Kunjungan";?></h4>
                </div>
                <div class="panel-body"><!-- Panel-body-->
                  <div class="row">
                    <form action="<?php echo base_url('admin/laporan_kunjungan/'.$tipe);?>" method="POST">
                      <div class="col-lg-12">
                        <div class="form-group col-md-6"> 
                          <label class="control-label col-sm-3">Date Range*</label>
                          <div class="col-md-9">
                            <div class="col-sm-6">
                              <input type="text" id="datepicker" name="date_from" class="form-control" placeholder="Date From">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" id="datepicker2" name="date_end" class="form-control" placeholder="Date To">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group col-md-6"> 
                          <label class="control-label col-sm-3">Unit*</label>
                          <div class="col-md-9">
                            <div class="col-sm-8">
                              <select name="select_unit" class="form-control">
                                <?php foreach ($unit as $unit): ?>
                                <option value="<?php echo $unit->id_rumah;?>"><?php echo $unit->nama_rumah;?></option>
                                <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-sm-12">
                              <button type="submit" value="1" name="show" class="btn btn-primary pull-right m-t-10">Show</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-12">
                    <a href="<?php echo base_url('admin/print_laporan/'.$tipe.'/'.$id_unit.'/'.$date_first.'/'.$date_last); ?>" target="_blank"><button type="button" name="print" class="btn btn-primary pull-right m-l-10">Print</button></a>
                  </div>
                  <hr style="border-width: 5px"></hr>
                  <div class="row">
                    <div class="table-rep-plugin" style="overflow: auto;">
                      <table id="tablelaporan" class="table table-striped table-bordered">
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
        </div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>