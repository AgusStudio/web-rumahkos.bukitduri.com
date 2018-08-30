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
                <li class="active">Profile</li>
              </ol>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6 col-lg-3 col-md-4">
            <div class="gal-detail thumb">
              <button title="Edit Photo" type="file" class="close" data-toggle="modal" data-target="#PictProfile"> <i class="fa fa-pencil"></i></button>
              <img src="<?php if($user->foto_user!=""){ echo base_url('assets/img/users/'.$user->foto_user);}else{ echo "http://placehold.it/200x200"; }?>" width="200" height="200" alt="Image">
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="my-3">Profile Detail</h3>
            <table class="table responive-table h5" style="overflow: auto">
              <tr><td>Nama</td><td>&nbsp:&nbsp</td><td><?php echo $user->nama_user;?></tr>
              <tr><td>Jenis Kelamin</td><td>&nbsp:&nbsp</td><td><?php echo $user->jk_user;?></tr>
              <tr><td>Alamat</td><td>&nbsp:&nbsp</td><td><?php echo $user->alamat_user;?></tr>
              <tr><td>Email</td><td>&nbsp:&nbsp</td><td><?php echo $user->email_user;?></tr>
              <tr><td>Tlp</td><td>&nbsp:&nbsp</td><td><?php echo $user->tlp_user;?></tr>
            </table>
          </div>
          <div class="col-md-2">
           <button class="btn btn-primary" style="width: 100%" data-toggle="modal" data-target="#password">Ubah Password</button>
           <button class="btn btn-secondary m-t-10" style="width: 100%" data-toggle="modal" data-target="#profile">Ubah Profile</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="PictProfile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Foto Profile</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/edit_foto');?>
                                <div class="form-group text-center">
                                    <img name="image" width="250" height="200" src="<?php if($user->foto_user!=""){ echo base_url('assets/img/users/'.$user->foto_user);}else{ echo "http://placehold.it/250x200"; }?>" class="img-fluid" id="preview2"  alt="Image"/>
                                </div> 
                                <div class="form-group"> 
                                    <input name="userfile" type="file" placeholder="Browse Image" onchange="tampilkanPreview(this,'preview2')">
                                    <input type="text" name="id_user" value="<?php echo $user_id;?>" hidden="hidden">
                                </div>
                                <div class="form-group btn-large btn-primary pull-right">
                                    <button name="pict_save" class="btn btn-large btn-primary pull-right" type="submit">Save</button>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
          <div class="col-md-12">
            <div id="password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" style="margin: auto" id="myModalLabel"><i class="fa fa-lock"></i> Ubah Password</h4>
                  </div>
                  <div class="modal-body">
                    <form name="FormPassword" class="form-horizontal" action="<?php echo site_url('admin/ubahpassword');?>" method="POST">
                      <div class="form-group ">
                        <input name="current" class="form-control" type="text" placeholder="Current Password" required>
                        <input type="text" name="id_user" value="<?php echo $user_id;?>" hidden="hidden">
                      </div>
                      <div class="form-group">
                        <input name="new_password" class="form-control" type="password" required placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <input name="cfm_password" class="form-control" type="password" required placeholder="Confirm Password">
                      </div>
                      <div class="form-group m-b-0">
                        <button type="submit" name="save_password" value="1" class="btn btn-info waves-effect waves-light">Save</button>
                      </div>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div>
          <div class="col-md-12">
            <div id="profile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" style="margin: auto" id="myModalLabel"><i class="fa fa-lock"></i> Ubah Profile</h4>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open_multipart('admin/ubahprofile');?>
                      <table class="table responive-table">
                        <tr><td>Nama</td><td>&nbsp:&nbsp</td><td><input name="nama" type="text" class="form-control" placeholder="Nama" required value="<?php echo $user->nama_user;?>"> <input type="text" name="id_user" value="<?php echo $user_id;?>" hidden="hidden"></tr>
                        <tr><td>Jenis Kelamin</td><td>&nbsp:&nbsp</td><td><select name="jk" class="form-control" required>
                          <option <?php if($user->jk_user=="Laki-Laki"){ echo "selected='selected'"; } ?> value="Laki-Laki"> Laki-Laki</option>
                          <option <?php if($user->jk_user=="Perempuan"){ echo "selected='selected'"; } ?> value="Perempuan"> Perempuan</option>
                        </select></tr>
                        <tr><td>Alamat</td><td>&nbsp:&nbsp</td><td><textarea name="alamat" type="text" class="form-control" placeholder="Alamat" required ><?php echo $user->alamat_user;?></textarea></tr>
                        <tr><td>Email</td><td>&nbsp:&nbsp</td><td><input name="email" type="email" class="form-control" placeholder="Email" required value="<?php echo $user->email_user;?>"></tr>
                        <tr><td>Tlp</td><td>&nbsp:&nbsp</td><td><input name="tlp" type="text" class="form-control" placeholder="No Telepone" required value="<?php echo $user->tlp_user;?>"></tr>
                      </table>
                      <div class="form-group m-b-0">
                        <button type="submit" name="save_password" value="1" class="btn btn-info waves-effect waves-light pull-right">Save</button>
                      </div>
                    <?php form_close();?>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
        </div><!-- /container -->
      </div><!-- /contain -->
    </div><!-- End Right content here -->
  </div><!-- END wrapper -->
<?php $this->load->view('admin/footer');?>