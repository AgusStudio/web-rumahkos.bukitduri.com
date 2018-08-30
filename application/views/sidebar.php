<div class="left side-menu" style="position: fixed">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="<?php if($user->foto_user==''){ echo base_url('assets/img/users/userdefault.png');}else{ echo base_url('assets/img/users/'.$user->foto_user); } ?>" alt="Photo" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $user->nama_user;?></a>
                </div>
                <p class="text-muted m-0">Pengelola Kos</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo base_url('welcome');?>" class="waves-effect"><i class="md md-home"></i><span> Home </span></a>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="fa fa-cogs"></i><span> Daftar Rumah Sewa </span><span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url('welcome/rumah_sewa/Rumah_Kos');?>"> Rumah Kos </a></li>
                        <li><a href="<?php echo base_url('welcome/rumah_sewa/Kontrakan');?>"> Rumah Kontrakan </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('welcome/pengaduan');?>" class="waves-effect"><i class="fa fa-envelope"></i><span> Pengaduan </span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('welcome/survei');?>" class="waves-effect"><i class="fa fa-calendar"></i><span> Agenda Survei </span></a>
                </li>
				<li>
                    <a href="#" class="waves-effect"><i class="fa fa-database"></i><span> Laporan </span><span class="pull-right"><i class="fa fa-angle-down pull-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url('welcome/laporan_kunjungan/Rumah_Kos');?>"> Pengunjung Rumah Kos </a></li>
                        <li><a href="<?php echo base_url('welcome/laporan_kunjungan/Kontrakan');?>"> Pengunjung Rumah Kontrakan </a></li>
                    </ul>
                </li>
				<li>
                    <a href="<?php echo site_url('welcome/logout');?>" class="waves-effect"><i class="md md-settings-power"></i><span> Logout </span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>