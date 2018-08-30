<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand media" href="<?php echo base_url('welcome');?>"><img width="40" height="40" src="<?php echo base_url('assets/img/logo/logo DKI.png');?>" alt="logo" class="d-flex mr-3 rounded-circle"> Rumah Kos Bukit Duri</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownService">
            <a class="dropdown-item" target="_blank" href="http://pelayanan.jakarta.go.id/">1 Dinas PM & PTSP DKI Jakarta</a>
            <a class="dropdown-item" target="_blank" href="https://www.lapor.go.id/">2 Pengaduan Online Rakyat</a>
            <a class="dropdown-item" target="_blank" href="http://www.bkpm.go.id/">3 Badan Koordinasi Penanaman Modal</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/contact');?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/about');?> ">About</a>
        </li>
        <li class="nav-item">
          <?php if($this->session->userdata('log_user')!="" && $this->session->userdata('previlage')=="User"){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user->username;?></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownService">
              <a class="dropdown-item" href="<?php echo base_url('welcome/profile');?>">Profile</a>
              <a class="dropdown-item" href="<?php echo base_url('welcome/logout');?>">Logout</a>
            </div>
          </li>
          <?php }else if($this->session->userdata('log_user')!="" && $this->session->userdata('previlage')=="Pengelola"){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user->username;?></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownService">
              <a class="dropdown-item" href="<?php echo base_url('welcome/profile');?>">Profile</a>
              <a class="dropdown-item" href="<?php echo base_url('welcome/kelola_kos');?>">Kelola Kos</a>
              <a class="dropdown-item" href="<?php echo base_url('welcome/logout');?>">Logout</a>
            </div>
          </li>
          <?php }else{ ?>
          <a class="nav-link" data-toggle="modal" data-target="#login"><i class="fa fa-lock"></i> Login</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-12">
  <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="'disabled'">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="margin: auto" id="myModalLabel"><i class="fa fa-lock"></i> Login</h4>
        </div>
        <div class="modal-body">
          <form name="FormLogin" class="form-horizontal" action="<?php echo site_url('login');?>" method="POST">
            <div class="form-group ">
              <input name="username" class="form-control" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input name="password" class="form-control" type="password" required placeholder="Password">
            </div>
            <div class="form-group">
              <select name="previlage" class="form-control" required>
                <option value="User">Sebagai User</option>
                <option value="Pengelola">Sebagai Pengelola Kos</option>
              </select>
            </div>
            <div class="form-group m-b-0">
              <button type="submit" name="login" value="1" class="btn btn-info waves-effect waves-light">Login</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>