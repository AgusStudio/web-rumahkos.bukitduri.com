 <?php $this->load->view('header');?>
 <body>
    <!-- Navigation -->
    <?php $this->load->view('navigator');?>
    <!-- /.Navigator -->
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Rumahkos.Bukitduri.com</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <!-- Content Row -->
      <div class="row">
        <!-- Contact Details Column -->
        <div class="col-lg-5 mb-4">
          <h3>Contact Details</h3>
          <p>
            Jl. Kp. Melayu Kecil III No.12, RT.8/RW.9,<br/>Bukit Duri, Tebet, Kota Jakarta Selatan
            <br/>Daerah Khusus Ibukota Jakarta 12840
            <br/>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (021) 8305311
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">rumahkos@bukitduri.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Sunday: 24 hour Service
          </p>
        </div>
        <div class="col-lg-7 mb-4">
          <h3>Send us a Message</h3>
          <form action="<?PHP echo base_url('welcome/pro_contact');?>" method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="full_name" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="phone" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="5" class="form-control" name="descript" maxlength="999" style="resize:none" required></textarea>
              </div>
            </div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" style="float: right;">Send Message</button>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- footer -->
    <?php $this->load->view('footer');?>
    <!-- /.footer -->
  </body>
</html>
