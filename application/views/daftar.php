<?php $this->load->view('header');?>
 <body>
    <!-- Navigation -->
    <?php $this->load->view('navigator');?>
    <!-- Page Content -->
    <div class="container">
      <div style="margin: auto" class="row my-3">
        <?php if(validation_errors() || $this->session->flashdata('result_form')) { ?>
            <div class="col-lg-4"></div>
            <div class="alert alert-info animated fadeInDown col-lg-4" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Peringatan!</strong><br/>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_form'); ?><br/>
                <button class="btn btn-success" data-toggle='modal' data-target='#login' type="button"> Login </button>
            </div>
            <div class="col-lg-4"></div>
        <?php } ?>
      </div>
      <h1 class="mt-3 mb-3">Daftar
        <small>User</small>
      </h1>
      <!-- Portfolio Item Row -->
      <form name="FormUser" class="form-horizontal" action="<?php echo site_url('welcome/signup_user');?>" method="POST" onsubmit="return validasi_form(this)">
      <div class="row">
        <div class="col-md-3">
          <div class="gal-detail thumb">
            <div class="form-group">
              <input name="userfile" type="file" placeholder="Browse Image" onchange="tampilkanPreview(this,'preview2')">
            </div>
            <img class="img-fluid" src="http://placehold.it/250x200" id="preview2"  alt="Image">
          </div>
        </div>
        <div class="col-md-6">
          <h3>Profile Detail</h3>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Nama</label>
              </div>
              <div class="col-md-8">
                <input name="nama" type="text" class="form-control" placeholder="Nama" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Username</label>
              </div>
              <div class="col-md-8">
                <input name="username" class="form-control" type="email" required placeholder="Example@host.com">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Password</label>
              </div>
              <div class="col-md-8">
                <input name="password" class="form-control" type="password" required placeholder="Password">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Confirm Password</label>
              </div>
              <div class="col-md-8">
                <input name="cfm_password" class="form-control" type="password" required placeholder="Confirm Password">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Previlage</label>
              </div>
              <div class="col-md-8">
                <select name="previlage" class="form-control" required>
                  <option value="User"> User</option>
                  <option value="Pengelola"> Pengelola</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Jenis Kelamin</label>
              </div>
              <div class="col-md-8">
                <select name="jk" class="form-control" required>
                  <option value="Laki-Laki"> Laki-Laki</option>
                  <option value="Perempuan"> Perempuan</option>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Alamat</label>
              </div>
              <div class="col-md-8">
                <textarea name="alamat" type="text" class="form-control" placeholder="Alamat" required ></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Email</label>
              </div>
              <div class="col-md-8">
                <input name="email" type="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Tlp</label>
              </div>
              <div class="col-md-8">
                <input name="tlp" type="text" class="form-control" placeholder="No Telepone" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Kartu Identitas</label>
              </div>
              <div class="col-md-8">
                <select name="kartu_identitas" class="form-control" required onclick="javascript:
                  var val = FormUser.kartu_identitas.value;
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
                <div id="ktp_input" class="my-2"></div>
                <div id="kitas_input" class="my-2"></div>
                <div id="paspor_input" class="my-2"></div>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4">
                <label class="label">Kartu Keluarga</label>
              </div>
              <div class="col-md-8">
                <input type="text" class="form-control" name="kk" placeholder="No Kartu Keluarga" required>
              </div>
            </div> 
            <div class="form-group m-b-0">
              <button type="submit" name="save" value="1" class="btn btn-info waves-effect waves-light pull-right">Save</button>
            </div>
          </div>
      </div>
    </form><hr/>
    </div>
    <!-- /.container -->
<!-- footer -->
    <?php $this->load->view('footer');?>
    <!-- /.footer -->
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
      function validasi_form(form) {
        var val_pass= form.password.value;
        var val_repass= form.cfm_password.value;
        if(val_pass!=val_repass){
          alert('Password dan Konfirmasi Password tidak sesuai!');
          form.password.focus();
          return false;
        }else{
          return true;
        }
      }
    </script>
  </body>
</html>