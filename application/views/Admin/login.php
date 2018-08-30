<?php $this->load->view('admin/header');?>
<body>
    <div class="wrapper-page" style="margin-top: 5px">
        <div class="panel panel-pages" style="background-color: #0093dd">
            <div> 
                <h3 class="text-center text-white"><img class="thumb-lg img-thumbnail m-t-15" src="<?php echo base_url('assets/img/logo/logo DKI.png');?>"><br/>Rumahkos.bukitduri.com</h3>
            </div> 
            <div class="panel-body form-horizontal" style="padding-top: 0px">
             <?php echo form_open('login/login_admin');?>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input name="username" class="form-control input-lg " type="text" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input name="password" class="form-control input-lg" type="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <select name="previlage" class="form-control input-lg" type="text" required>
                            <option value="">Pilih Previlage</option>
                            <option value="Ketua RT">Ketua RT</option>
                            <option value="Administrator">Administrator</option>
                        </select>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12">
                        <button class="btn btn-success btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup" class="text-white pull-left">
                                Remember me
                            </label>
                            <a href="recoverpw.html" class="pull-right text-white"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        
                    </div>
                </div> 
            <?php echo form_close();?>
            </div>                                 
            
        </div>
        <div style="margin-top: 10px">
        <?php if(validation_errors() || $this->session->flashdata('result_login')) { ?>
            <div class="alert alert-danger animated fadeInDown" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Peringatan!</strong><br/>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_login'); ?>
            </div>
        <?php } ?>
      </div>
    </div>
<?php $this->load->view('admin/footer');?>