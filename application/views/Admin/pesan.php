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
                <li class="active">Kritik</li>
              </ol>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Pesan</h3>
                </div>
                <div class="panel-body" style="overflow: auto">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($pesan as $pesan): ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $pesan->full_name;?></td>
                            <td><?php echo $pesan->phone;?></td>
                            <td><?php echo $pesan->email;?></td>
                            <td><?php echo $pesan->descript;?></td>
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