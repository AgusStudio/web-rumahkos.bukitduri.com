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
                <li class="active">Data Ketua RT</li>
              </ol>
            </div>
            <div class="row">'
            <div class="col-md-4"></div>
            <div style="margin-top: 10px;" class="col-md-4">
              <?php if($this->session->flashdata('result_del')) { ?>
                  <div class="alert alert-info animated fadeInDown" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Alert!</strong><br/>
                      <?php echo $this->session->flashdata('result_del'); ?>
                  </div>
              <?php } ?>
              <?php if($this->session->flashdata('result_add')) { ?>
                  <div class="alert alert-info animated fadeInDown" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Alert!</strong><br/>
                      <?php echo $this->session->flashdata('result_add'); ?>
                  </div>
              <?php } ?>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Ketua RT <button class="btn btn-success pull-right" title="Tambah Ketua RT" data-toggle='modal' data-target='#add_ketua_rt'>Tambah Ketua RT</button></h3>
                </div>
                <div class="panel-body" style="overflow: auto">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Desa</th>
                            <th>Ketua RT</th>
                            <th>NIP</th>
                            <th>Tempat,tgl lahir</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($ketua_rt as $ketua_rt): ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $ketua_rt->rt;?></td>
                            <td><?php echo $ketua_rt->rw;?></td>
                            <td><?php echo $ketua_rt->nama_desa.", ".$ketua_rt->kecamatan.", ".$ketua_rt->kota.", ".$ketua_rt->provinsi;?></td>
                            <td><?php echo $ketua_rt->ketua_rt;?></td>
                            <td><?php echo $ketua_rt->username;?></td>
                            <td><?php echo $ketua_rt->tempat_lahir.", ".$ketua_rt->tgl_lahir;?></td>
                            <td><?php echo form_open('admin/del_ketua_rt');?><button value="<?php echo $ketua_rt->id_ketua_rt;?>" type="submit" name="id" class="btn btn-danger" title="Hapus Ketua RT" onclick="return confirm('Apakah Anda yakin?');"><i class="fa fa-trash"></i></button><?php echo form_close();?></td>
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
          <div class="row">
          <div class="col-md-12">
            <div id="add_ketua_rt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title text-center" style="margin: auto" id="myModalLabel">Form Ketua RT Baru</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" action="<?php echo site_url('admin/addketua_rt');?>" method="POST">
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label>Nama Ketua RT</label>
                        </div>
                        <div class="col-sm-9">
                          <input name="nama_rt" type="text" class="form-control" placeholder="Nama Ketua RT" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label>NIP</label>
                        </div>
                        <div class="col-sm-9">
                          <input name="nip" type="text" class="form-control" placeholder="NIP Ketua RT" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label>Tempat,Tgl Lahir</label>
                        </div>
                        <div class="col-sm-5">
                          <input name="tempat" type="text" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-sm-4">
                          <input name="tgl_lahir" type="text" id="datepicker" class="form-control" placeholder="Tanggal Lahir" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <label>Wilayah</label>
                        </div>
                        <div class="col-sm-9">
                          <select name="wilayah" class="form-control" required>
                            <option value="">Pilih Wilayah RT/RW</option>
                            <?php foreach ($rt as $rt ): ?>
                            <option value="<?php echo $rt->id_rt;?>"><?php echo "RT: ".$rt->rt.", RW: ".$rt->rw;?></option>
                          <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-info waves-effect waves-light">Kirim</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div>
          </div>
          </div>
        </div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>