<div class="col-md-12">
  <div style=" transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
          transform: translate(0, -25%);" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="margin: auto" id="myModalLabel"><i class="fa fa-lock"></i> Login</h4>
        </div>
        <div class="modal-body">
          <form name="FormLogin" class="form-horizontal" action="<?php echo site_url('welcome');?>" method="POST">
            <div class="form-group ">
              <input name="username" class="form-control" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input name="password" class="form-control" type="password" required placeholder="Password">
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