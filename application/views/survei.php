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
                <li class="active">Agenda Survei</li>
              </ol>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Agenda Survei</h3>
                </div>
                <div class="panel-body" style="overflow: auto">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Unit Rumah</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Surveyor</th>
                            <th>Telepon</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($survei as $survei): ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $survei->nama_rumah;?></td>
                            <td><?php echo date('d-m-Y',strtotime($survei->tgl_survei));?></td>
                            <td><?php echo $survei->jam_survei;?></td>
                            <td><?php echo $survei->nama_user;?></td>
                            <td><?php echo $survei->tlp_user;?></td>
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